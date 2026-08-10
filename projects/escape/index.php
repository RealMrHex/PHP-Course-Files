<?php
require './includes/bootstrap.php';

if(isset($_SESSION['player']))
{
  header('Location: http://localhost/escape/room');
}
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="پرونده‌ای نیمه‌کاره. دفتری قفل‌شده. فقط کدها حرف می‌زنند.">
  <title>اتاق فرار PHP</title>
  <link rel="stylesheet" href="./assets/app.css">
</head>
<body class="landing-page">
  <div class="ambient-grid" aria-hidden="true"></div>

  <main class="welcome-shell">
    <section class="welcome-card">
      <p class="eyebrow"><span class="status-dot"></span> پروندهٔ محرمانه · دسترسی غیرمجاز</p>
      <div class="php-mark" aria-hidden="true">&lt;?php</div>

      <h1>اتاق فرار <span>PHP</span></h1>
      <p class="story">
        نیمه‌شب بیدار می‌شی؛ توی دفتر یک برنامه‌نویس مفقود.
        روی میز، پرونده‌ای باز مونده با عنوان «نشت داده». در از بیرون قفل شده،
        مانیتور فقط یک خط چشمک می‌زنه: <span class="ltr">undefined variable</span>.
        کسی ردپاش رو توی کدها پنهان کرده — و تنها راه خروج، خواندن همون ردپاست.
      </p>

      <div class="system-message" role="status" hidden data-form-message></div>

      <form method="POST" action="room/index.php" class="start-form" data-start-form>
        <label for="player-name">نام مستعار بازپرس</label>
        <div class="input-wrap">
          <span aria-hidden="true">&gt;_</span>
          <input
            id="player-name"
            name="player_name"
            type="text"
            placeholder="مثلاً سایه‌بان"
            autocomplete="nickname"
            required
            maxlength="30"
          >
        </div>
        <button class="primary-button" type="submit">
          <span>ورود به صحنه جرم</span>
          <span aria-hidden="true">←</span>
        </button>
      </form>

      <p class="hint-text">چهار سرنخ. سه شانس. یک متهم خاموش.</p>
    </section>
  </main>

  <script src="./assets/app.js"></script>
</body>
</html>
