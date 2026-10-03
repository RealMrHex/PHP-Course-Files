<?php
require '../includes/bootstrap.php';

$flashMessage = flashMessage();

if(isPost() && isset($_POST['player_name']))
{
  startGame($_POST['player_name']);
}
else
{
  if(!isGameOngoing())
  {
    redirect('/');
  }
}

$puzzles = puzzles();

if(attemptsLeft() <= 0 || score() >= 850)
{
  redirect('/result');
}

?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صحنه جرم | اتاق فرار PHP</title>
  <link rel="stylesheet" href="../assets/app.css">
</head>
<body>
  <div class="ambient-grid" aria-hidden="true"></div>

  <header class="game-header">
    <a class="brand" href="index.html"><span>&lt;?php</span> اتاق فرار</a>
    <div class="room-state"><span class="status-dot"></span> صحنه تحت بررسی</div>
    <a href="/escape/logout">خروج</a>
  </header>

  <main class="game-layout">
    <section class="room-intro">
      <div>
        <p class="eyebrow">پرونده ۰۴۷ / دفتر تاریک دولوپر</p>
        <h1>سرنخ‌ها را جمع کن</h1>
        <p>
          هوا بوی قهوهٔ سرد و کابل سوخته می‌ده. روی دیوار، عکس‌هایی خط‌خورده‌ان.
          چهار نقطه روی صحنه علامت خورده — هر کدوم تکه‌ای از حقیقت رو قایم کرده.
          عجله نکن؛ یک اشتباه، و سیستم مدرک بعدی رو برای همیشه پاک می‌کنه.
        </p>
      </div>

      <aside class="status-panel" aria-label="وضعیت بازپرس">
        <div>
          <span>بازپرس</span>
          <strong><?= playerName() ?></strong>
        </div>
        <div>
          <span>امتیاز پرونده</span>
          <strong><?= score() ?></strong>
        </div>
        <div>
          <span>شانس باقی</span>
          <strong class="attempts"><?= attemptsLeft() ?></strong>
        </div>
      </aside>
    </section>

    <?php if(isset($flashMessage)) { ?> 
      <div class="<?= $flashMessage['success'] ? 'system-message' : 'error-message' ?> room-message" role="status">
        <span>[پیام سیستمی]</span>
        <?= $flashMessage['message'] ?>
      </div>
    <?php } else { ?>
      <div class="system-message room-message" role="status">
        <span>[لاگ صحنه]</span> هیچ شاهدی نیست. فقط اشیاء حرف می‌زنند — یکی را لمس کن.
      </div>
    <?php } ?>

    <section class="object-grid" aria-label="اشیای صحنه جرم">

      <?php foreach($puzzles as $puzzle) { ?>

      <article class="object-card" data-object-card>
        <div class="object-top">
          <span class="object-number"><?= $puzzle['number'] ?></span>
          <span class="object-icon" aria-hidden="true"><?= $puzzle['card_icon'] ?></span>
        </div>
        <h2><?= $puzzle['card_title'] ?></h2>
        <p><?= $puzzle['card_blurb'] ?></p>
        <?php if(isPuzzleResolved($puzzle)) { ?>
        <button class="object-button" type="button" data-clue-button aria-expanded="false">
          این معما حل شده
          <span>👍</span>
        </button>
        <?php } else { ?>
        <button class="object-button" type="button" data-clue-button aria-expanded="false">
          <?= $puzzle['action_label'] ?>
          <span>←</span>
        </button>
        <div class="clue" hidden>
          <p><?= $puzzle['clue_text'] ?></p>
          <code><?= $puzzle['clue_code'] ?></code>
          <form method="POST" action="/escape/puzzle/index.php">
            <input type="hidden" name="object" value="<?= $puzzle['object'] ?>">
            <button class="clue-link" type="submit"><?= $puzzle['open_label'] ?></button>
          </form>
        </div>
        <?php } ?>
      </article>
      
      <?php } ?>

    </section>
  </main>

  <script src="../assets/app.js"></script>
</body>
</html>
