<?php
require '../includes/bootstrap.php';

$isFailed = isFailed();
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>پرونده بسته شد | اتاق فرار PHP</title>
  <link rel="stylesheet" href="../assets/app.css">
</head>
<body class="<?= $isFailed ? 'failed-page' : 'success-page' ?>">
  <div class="ambient-grid" aria-hidden="true"></div>
  <main class="success-shell">
    <section class="success-card">
      <div class="<?= $isFailed ? 'failed-icon' : 'success-icon' ?>" aria-hidden="true">
        <?= $isFailed ? '☠️' : '🏃‍♂️' ?>
      </div>
      <p class="eyebrow">وضعیت:
        <?= $isFailed ? 'خروج تایید نشد' : 'خروج تأیید شد' ?>
      </p>
      <h1>
        <?= $isFailed ? 'نتونستی زنده بیرون بیای' : 'از صحنه زنده بیرون اومدی' ?>
      </h1>
      <p class="success-copy">
        درِ فولادی با صدای خفه‌ای باز می‌شود. لامپ‌های راهرو یکی‌یکی روشن می‌شوند —
        انگار کسی از قبل مسیر فرارت را چیده بود.
        پرونده هنوز نیمه‌کاره است… ولی حداقل، نام تو روی لیست قربانی‌ها نیست.
      </p>

      <div class="final-score">
        <span>امتیاز پرونده</span>
        <!-- PHP: امتیاز نهایی اینجا -->
        <strong><?= score() ?></strong>
        <!-- PHP: نام بازیکن اینجا -->
        <small>بازپرس: <?= playerName() ?></small>
      </div>

      <div class="challenge-list">
        <h2>مدارک جمع‌آوری‌شده</h2>
        <ul>
          <?php foreach(puzzles() as $puzzle)
          {
          ?>

          <li>
            <span><?= isPuzzleResolved($puzzle) ? '✓' : 'x' ?></span>
            <div>
              <strong><?= $puzzle['title'] ?></strong>
              <small><?= $puzzle['location'] ?></small>
            </div>
          </li>

          <?php 
          }
          ?>
        </ul>
      </div>

      <form method="POST" action="/escape/logout/index.php">
        <input type="hidden" name="action" value="restart">
        <button class="primary-button" type="submit">
          <span>پروندهٔ تازه</span>
          <span aria-hidden="true">↻</span>
        </button>
      </form>
    </section>
  </main>

  <script src="../assets/app.js"></script>
</body>
</html>
