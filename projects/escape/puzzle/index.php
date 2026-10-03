<?php
require '../includes/bootstrap.php';

$puzzle = [];
$message = null;
$isError = false;

if(attemptsLeft() <= 0)
{
  redirect('/result');
}

if(isPost() && isset($_POST['object']) && isGameOngoing())
{
  $puzzle = getPuzzleByObject($_POST['object']);

  if($puzzle['is_finale'] && score() != 600)
  {
    setFlashMessage('برای خروج از این معما نیازه که به سرنخ های لازم برسی', false);
    redirect('/room');
  }
  
  if(isPuzzleResolved($puzzle))
  {
    redirect('/room');
  }

  if(isset($_POST['answer']))
  {
    $isCorrect = validatePuzzleAnswer($puzzle, $_POST['answer']);

    if($isCorrect)
    {
      setFlashMessage('این دفعه رو جون سالم به در بردیم و معما حل شد.', true);
      redirect('/room');
    }
    else
    {
      $message = 'اشتباه کردی؛ اشتباه بعدی ممکنه آخرین اشتباه زندگیت بشه!';
      $isError = true;
    }
  }
}
else
{
  redirect('/room');
}

$puzzles = puzzles();
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    مدرک <?= $puzzle['number'] ?>
    |
    اتاق فرار PHP
  </title>
  <link rel="stylesheet" href="../assets/app.css">
</head>
<body>
  <div class="ambient-grid" aria-hidden="true"></div>

  <header class="game-header">
    <a class="brand" href="/escape/room"><span>&lt;?php</span> اتاق فرار</a>
    <div class="room-state"><span class="status-dot"></span> صحنه تحت بررسی</div>
    <a class="back-link" href="/escape/room">بازگشت به صحنه →</a>
  </header>

  <main class="puzzle-layout">
    <section class="puzzle-card">
      <div class="puzzle-heading">
        <div>
          <p class="eyebrow"> 
             مدرک <?= $puzzle['number'] ?> · <?= $puzzle['location'] ?>
          </p>
          <h1><?= $puzzle['title'] ?></h1>
        </div>
        <span class="difficulty"><?= $puzzle['difficulty'] ?></span>
      </div>

      <p class="puzzle-description">
        <?= $puzzle['description'] ?>
      </p>

      <div class="code-window">
        <div class="window-bar">
          <span></span><span></span><span></span>
          <small><?= $puzzle['code_file'] ?></small>
        </div>
        <pre><code><?= $puzzle['code_html'] ?></code></pre>
      </div>

      <form method="POST" action="/escape/puzzle/index.php" class="answer-form">
        <input type="hidden" name="object" value="<?= $_POST['object'] ?>">

        <fieldset>
          <legend><?= $puzzle['question'] ?></legend>

          <?php foreach($puzzle['options'] as $questionKey => $question) { ?>
          <label class="answer-option">
            <input type="radio" name="answer" value="<?= $questionKey ?>" required>
            <span class="choice-letter"><?= strtoupper($questionKey) ?></span>
            <code><?= $question ?></code>
          </label>
          <?php } ?>
        </fieldset>

        <button class="primary-button" type="submit">
          <span>ثبت در پرونده</span>
          <span aria-hidden="true">←</span>
        </button>
      </form>

      <?php if(isset($message)) { ?>
      <div class="<?= $isError ? 'error-message' : 'system-message' ?>" role="status" data-answer-message><?= $message ?></div>
      <?php } ?>
    </section>
  </main>

  <script src="../assets/app.js"></script>
</body>
</html>
