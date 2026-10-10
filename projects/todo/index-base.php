<?php

require __DIR__ . '/bootstrap.php';

$app = App::initialize();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if($action === 'logout')
    {
        App::logout();
    }

    $listId = (int) ($_POST['list_id'] ?? 0);

    if ($action === 'create_list') {
        $title = trim($_POST['title'] ?? '');

        if ($title !== '') {
            $listId = $_SESSION['app']['next_id'];
            $_SESSION['app']['next_id']++;
            $_SESSION['app']['lists'][] = [
                'id' => $listId,
                'title' => $title,
                'tasks' => [],
            ];
        }
    }

    if ($action === 'create_task') {
        $title = trim($_POST['title'] ?? '');
        $type = $_POST['type'] ?? 'normal';
        $due = $_POST['due_date'] ?? '';
        $priority = $_POST['priority'] ?? 'Medium';

        if ($title !== '' && ($type === 'normal' || $due !== '')) {
            foreach ($_SESSION['app']['lists'] as $index => $list) {
                if ($list['id'] !== $listId) {
                    continue;
                }

                $task = [
                    'id' => $_SESSION['app']['next_id'],
                    'type' => $type,
                    'title' => $title,
                    'done' => false,
                ];

                if ($type !== 'normal') {
                    $task['due'] = $due;
                }

                if ($type === 'priority') {
                    $task['priority'] = $priority;
                }

                $_SESSION['app']['lists'][$index]['tasks'][] = $task;
                $_SESSION['app']['next_id']++;
            }
        }
    }

    if ($action === 'toggle') {
        $taskId = (int) ($_POST['task_id'] ?? 0);

        foreach ($_SESSION['app']['lists'] as $listIndex => $list) {
            if ($list['id'] !== $listId) {
                continue;
            }

            foreach ($list['tasks'] as $taskIndex => $task) {
                if ($task['id'] !== $taskId) {
                    continue;
                }

                $_SESSION['app']['lists'][$listIndex]['tasks'][$taskIndex]['done'] = !$task['done'];
            }
        }
    }

    if ($listId === 0) {
        $listId = $_SESSION['app']['lists'][0]['id'];
    }

    header('Location: index.php?list=' . $listId);
    exit;
}

$requestedId = isset($_GET['list']) ? (int) $_GET['list'] : 0;
$active = ['id' => 0];

// foreach ($_SESSION['app']['lists'] as $list) {
//     if ($list['id'] === $requestedId) {
//         $active = $list;
//     }
// }

$priorityClass = [
    'High' => 'bg-coral text-white',
    'Medium' => 'bg-sun text-ink',
    'Low' => 'bg-leaf text-white',
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasks</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800;900&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            nunito: ["Nunito", "ui-sans-serif", "system-ui", "sans-serif"],
          },
          colors: {
            cream: "#f6f1e8",
            card: "#fffdf9",
            ink: "#1c1c1c",
            mint: "#3dcc86",
            coral: "#ef6d62",
            sun: "#f6d34a",
            leaf: "#3cbe78",
            sky: "#57b0ee",
          },
        },
      },
    };
  </script>
  <style>
    body { background-color: #f6f1e8; }
  </style>
</head>
<body class="font-nunito text-ink min-h-screen">
  <main class="mx-auto flex min-h-screen w-full max-w-[960px] items-start px-4 py-10 sm:items-center sm:px-6">
    <section class="w-full rounded-[32px] border-[3px] border-ink bg-card shadow-[8px_8px_0_#1c1c1c]">
      <header class="flex items-center justify-between gap-4 px-5 pb-5 pt-6 sm:px-8 sm:pt-7">
        <h1 class="text-4xl font-black tracking-tight sm:text-5xl">Tasks</h1>
        <div class="flex gap-4 items-center">
        <button
          id="open-task"
          type="button"
          class="inline-flex items-center gap-2 rounded-[18px] border-[3px] border-ink bg-mint px-4 py-2.5 text-lg font-extrabold text-white shadow-[4px_4px_0_#1c1c1c] transition active:translate-x-[3px] active:translate-y-[3px] active:shadow-none sm:px-5 sm:py-3 sm:text-xl"
        >
          <span class="text-xl leading-none" aria-hidden="true">+</span>
          New Task
        </button>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="logout">
            <button
            id="logout"
            type="submit"
            class="inline-flex items-center gap-2 rounded-[18px] border-[3px] border-ink bg-coral px-4 py-2.5 text-lg font-extrabold text-white shadow-[4px_4px_0_#1c1c1c] transition active:translate-x-[3px] active:translate-y-[3px] active:shadow-none sm:px-5 sm:py-3 sm:text-xl"
            >
            <span class="text-xl leading-none" aria-hidden="true">x</span>
            Logout
            </button>
        </form>
        </div>
      </header>

      <div class="border-t-[3px] border-ink px-4 py-4 sm:px-6">
        <div class="flex flex-wrap items-center gap-3" role="tablist" aria-label="Todo lists">
          <?php foreach ($app->lists() as $list) { ?>
            <?php $isActive = $list->id() === $active['id']; ?>
            <a
              href="index.php?list=<?= $list->id() ?>"
              role="tab"
              aria-selected="<?= $isActive ? 'true' : 'false' ?>"
              class="rounded-2xl border-[3px] border-ink px-4 py-2 text-lg font-extrabold transition <?= $isActive ? 'translate-x-[2px] translate-y-[2px] bg-ink text-white shadow-none' : 'bg-white shadow-[3px_3px_0_#1c1c1c] hover:-translate-y-0.5' ?>"
            ><?= e($list->title()) ?></a>
          <?php } ?>
          <button type="button" id="open-list" class="inline-flex items-center gap-1 rounded-2xl border-[3px] border-ink bg-mint px-4 py-2 text-lg font-extrabold text-white shadow-[3px_3px_0_#1c1c1c] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none">
            <span class="text-2xl leading-none" aria-hidden="true">+</span> List
          </button>
        </div>
      </div>

      <div class="border-t-[3px] border-ink px-3 pb-5 pt-4 sm:px-6 sm:pb-6">
        <div class="overflow-x-auto">
          <table class="w-full min-w-[640px] border-collapse text-left">
            <thead>
              <tr class="border-b-[3px] border-ink">
                <th class="w-[50%] px-3 pb-3 text-2xl font-black sm:text-3xl">Task</th>
                <th class="w-[24%] px-3 pb-3 text-xl font-extrabold sm:text-2xl">Priority</th>
                <th class="w-[26%] px-3 pb-3 text-xl font-extrabold sm:text-2xl">Due Date</th>
              </tr>
            </thead>
            <tbody>
              <?php if (count($active['tasks']) === 0) { ?>
                <tr>
                  <td colspan="3" class="px-3 py-10 text-center text-xl font-extrabold">This list is empty. Add a task.</td>
                </tr>
              <?php } ?>
              <?php foreach ($active['tasks'] as $task) { ?>
                <tr>
                  <td class="px-3 py-4">
                    <div class="flex items-center gap-3">
                      <form method="post" action="index.php">
                        <input type="hidden" name="action" value="toggle">
                        <input type="hidden" name="list_id" value="<?= $active['id'] ?>">
                        <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
                        <button type="submit" class="shrink-0" aria-label="Toggle <?= e($task['title']) ?>">
                          <?php if ($task['done']) { ?>
                            <span class="grid h-9 w-9 place-items-center rounded-full border-[3px] border-ink bg-leaf text-white shadow-[2px_2px_0_#1c1c1c]">
                              <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12.5 9.2 17 19 7"></path></svg>
                            </span>
                          <?php } else { ?>
                            <span class="block h-9 w-9 rounded-full border-[3px] border-ink bg-sky shadow-[2px_2px_0_#1c1c1c]"></span>
                          <?php } ?>
                        </button>
                      </form>
                      <span class="text-xl font-extrabold sm:text-2xl"><?= e($task['title']) ?></span>
                    </div>
                  </td>
                  <td class="px-3 py-4">
                    <?php if (!isset($task['priority'])) { ?>
                      <span class="text-2xl font-black text-ink/25">—</span>
                    <?php } else { ?>
                      <span class="inline-flex min-w-[108px] items-center justify-center rounded-xl border-[3px] border-ink px-3 py-1.5 text-base font-extrabold shadow-[3px_3px_0_#1c1c1c] <?= $priorityClass[$task['priority']] ?>"><?= e($task['priority']) ?></span>
                    <?php } ?>
                  </td>
                  <td class="px-3 py-4">
                    <?php if (!isset($task['due'])) { ?>
                      <span class="text-2xl font-black text-ink/25">—</span>
                    <?php } else { ?>
                      <div class="flex items-center gap-2.5 text-2xl font-bold">
                        <span class="grid h-8 w-7 place-items-center" aria-hidden="true">
                          <svg viewBox="0 0 28 30" class="h-7 w-6" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="5" width="22" height="21" rx="4"></rect><path d="M3 12h22"></path><path d="M9 3v5M19 3v5" stroke-linecap="round"></path></svg>
                        </span>
                        <span><?= e(date('M j', strtotime($task['due']))) ?></span>
                      </div>
                    <?php } ?>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <div id="task-modal" class="fixed inset-0 z-20 hidden items-center justify-center bg-ink/30 px-4 py-8" role="dialog" aria-modal="true" aria-labelledby="task-modal-title">
    <form id="task-form" class="w-full max-w-lg rounded-[28px] border-[3px] border-ink bg-card p-6 shadow-[8px_8px_0_#1c1c1c]" action="index.php" method="post">
      <div class="mb-5 flex items-center justify-between gap-3">
        <h2 id="task-modal-title" class="text-3xl font-black">New Task</h2>
        <button type="button" data-close="task-modal" class="grid h-10 w-10 place-items-center rounded-xl border-[3px] border-ink bg-white text-2xl font-black leading-none shadow-[3px_3px_0_#1c1c1c] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none" aria-label="Close">
          ×
        </button>
      </div>

      <input type="hidden" name="action" value="create_task">
      <input type="hidden" name="list_id" value="<?= $active['id'] ?>">

      <p class="mb-2 text-sm font-extrabold">Kind</p>
      <input type="hidden" name="type" value="normal">
      <div id="type-picker" class="mb-5 grid grid-cols-1 gap-3 sm:grid-cols-3">
        <button type="button" data-type="normal" class="type-choice rounded-2xl border-[3px] border-ink px-3 py-3 text-center">
          <span class="block text-lg font-black">Normal</span>
          <span class="block text-xs font-bold opacity-80">Title only</span>
        </button>
        <button type="button" data-type="timed" class="type-choice rounded-2xl border-[3px] border-ink px-3 py-3 text-center">
          <span class="block text-lg font-black">Timed</span>
          <span class="block text-xs font-bold opacity-80">Title + date</span>
        </button>
        <button type="button" data-type="priority" class="type-choice rounded-2xl border-[3px] border-ink px-3 py-3 text-center">
          <span class="block text-lg font-black">Priority</span>
          <span class="block text-xs font-bold opacity-80">Title + date + level</span>
        </button>
      </div>

      <label class="mb-4 block">
        <span class="mb-1 block text-sm font-extrabold">Task</span>
        <input name="title" required maxlength="80" class="w-full rounded-xl border-[3px] border-ink bg-white px-3 py-2 text-lg font-bold shadow-[3px_3px_0_#1c1c1c] outline-none" placeholder="Fix UI Bug">
      </label>

      <label id="due-field" class="mb-4 hidden block">
        <span class="mb-1 block text-sm font-extrabold">Due Date</span>
        <input name="due_date" type="date" class="w-full rounded-xl border-[3px] border-ink bg-white px-3 py-2 text-lg font-bold shadow-[3px_3px_0_#1c1c1c] outline-none">
      </label>

      <label id="priority-field" class="mb-6 hidden block">
        <span class="mb-1 block text-sm font-extrabold">Priority</span>
        <select name="priority" class="w-full rounded-xl border-[3px] border-ink bg-white px-3 py-2 text-lg font-bold shadow-[3px_3px_0_#1c1c1c] outline-none">
          <option value="High">High</option>
          <option value="Medium" selected>Medium</option>
          <option value="Low">Low</option>
        </select>
      </label>

      <button type="submit" class="w-full rounded-2xl border-[3px] border-ink bg-mint py-2.5 text-lg font-extrabold text-white shadow-[4px_4px_0_#1c1c1c] active:translate-x-[3px] active:translate-y-[3px] active:shadow-none">
        Add Task
      </button>
    </form>
  </div>

  <div id="list-modal" class="fixed inset-0 z-20 hidden items-center justify-center bg-ink/30 px-4" role="dialog" aria-modal="true" aria-labelledby="list-modal-title">
    <form id="list-form" class="w-full max-w-md rounded-[28px] border-[3px] border-ink bg-card p-6 shadow-[8px_8px_0_#1c1c1c]" action="index.php" method="post">
      <div class="mb-5 flex items-center justify-between gap-3">
        <h2 id="list-modal-title" class="text-3xl font-black">New List</h2>
        <button type="button" data-close="list-modal" class="grid h-10 w-10 place-items-center rounded-xl border-[3px] border-ink bg-white text-2xl font-black leading-none shadow-[3px_3px_0_#1c1c1c] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none" aria-label="Close">
          ×
        </button>
      </div>
      <input type="hidden" name="action" value="create_list">
      <label class="mb-6 block">
        <span class="mb-1 block text-sm font-extrabold">Title</span>
        <input name="title" required maxlength="40" class="w-full rounded-xl border-[3px] border-ink bg-white px-3 py-2 text-lg font-bold shadow-[3px_3px_0_#1c1c1c] outline-none" placeholder="Class">
      </label>
      <button type="submit" class="w-full rounded-2xl border-[3px] border-ink bg-mint py-2.5 text-lg font-extrabold text-white shadow-[4px_4px_0_#1c1c1c] active:translate-x-[3px] active:translate-y-[3px] active:shadow-none">
        Add List
      </button>
    </form>
  </div>

  <script>
    const taskModal = document.getElementById("task-modal");
    const listModal = document.getElementById("list-modal");
    const taskForm = document.getElementById("task-form");
    const listForm = document.getElementById("list-form");
    const dueField = document.getElementById("due-field");
    const priorityField = document.getElementById("priority-field");

    const typeStyle = {
      normal: "bg-sky text-white translate-x-[2px] translate-y-[2px] shadow-none",
      timed: "bg-sun text-ink translate-x-[2px] translate-y-[2px] shadow-none",
      priority: "bg-coral text-white translate-x-[2px] translate-y-[2px] shadow-none",
    };

    function openModal(modal) {
      modal.classList.remove("hidden");
      modal.classList.add("flex");
      modal.querySelector("input[name=title]").focus();
    }

    function closeModal(modal) {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }

    function syncTaskFields() {
      const type = taskForm.elements.type.value;
      const needsDate = type !== "normal";
      const needsPriority = type === "priority";
      dueField.classList.toggle("hidden", !needsDate);
      priorityField.classList.toggle("hidden", !needsPriority);
      taskForm.elements.due_date.required = needsDate;
      taskForm.elements.priority.required = needsPriority;
      document.querySelectorAll(".type-choice").forEach((button) => {
        const on = button.dataset.type === type;
        button.className = "type-choice rounded-2xl border-[3px] border-ink px-3 py-3 text-center " +
          (on ? typeStyle[button.dataset.type] : "bg-white shadow-[3px_3px_0_#1c1c1c]");
        button.setAttribute("aria-pressed", on ? "true" : "false");
      });
    }

    document.getElementById("type-picker").addEventListener("click", (event) => {
      const button = event.target.closest(".type-choice");
      if (!button) return;
      taskForm.elements.type.value = button.dataset.type;
      syncTaskFields();
    });

    document.getElementById("open-task").addEventListener("click", () => {
      taskForm.reset();
      taskForm.elements.type.value = "normal";
      syncTaskFields();
      openModal(taskModal);
    });

    document.getElementById("open-list").addEventListener("click", () => {
      listForm.reset();
      openModal(listModal);
    });

    document.querySelectorAll("[data-close]").forEach((button) => {
      button.addEventListener("click", () => closeModal(document.getElementById(button.dataset.close)));
    });

    [taskModal, listModal].forEach((modal) => {
      modal.addEventListener("click", (event) => {
        if (event.target === modal) closeModal(modal);
      });
    });

    document.addEventListener("keydown", (event) => {
      if (event.key !== "Escape") return;
      closeModal(taskModal);
      closeModal(listModal);
    });

    syncTaskFields();
  </script>
</body>
</html>
