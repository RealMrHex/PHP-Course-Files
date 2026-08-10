<?php
require '../includes/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['player_name']))
  {
    $_SESSION['player'] = $_POST['player_name'];
  }
  else
  {
    header('Location: http://localhost/escape');
  }
}
else
{
  if(!isset($_SESSION['player']))
  {
    header('Location: http://localhost/escape');
  }
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
          <!-- PHP: نام بازیکن اینجا -->
          <strong><?= $_SESSION['player'] ?></strong>
        </div>
        <div>
          <span>امتیاز پرونده</span>
          <!-- PHP: نمایش امتیاز اینجا -->
          <strong>۰۲۰۰</strong>
        </div>
        <div>
          <span>شانس باقی</span>
          <!-- PHP: تعداد تلاش باقی‌مانده اینجا -->
          <strong class="attempts">● ● ●</strong>
        </div>
      </aside>
    </section>

    <!-- PHP: پیام بازی اینجا -->
    <div class="system-message room-message" role="status">
      <span>[لاگ صحنه]</span> هیچ شاهدی نیست. فقط اشیاء حرف می‌زنند — یکی را لمس کن.
    </div>

    <section class="object-grid" aria-label="اشیای صحنه جرم">

      <!-- کامپیوتر -->
      <article class="object-card" data-object-card>
        <div class="object-top">
          <span class="object-number">01</span>
          <span class="object-icon" aria-hidden="true">💻</span>
        </div>
        <h2>ترمینال قربانی</h2>
        <p>صفحه هنوز روشنه؛ انگار صاحبش وسط فرار، چیزی رو نیمه‌کاره جا گذاشته.</p>
        <button class="object-button" type="button" data-clue-button aria-expanded="false">
          نفوذ به ترمینال <span>←</span>
        </button>
        <div class="clue" hidden>
          <!-- PHP: متن راهنما اینجا -->
          <p>لاگ آخر، قبل از قطع شدن، فقط یک اعتراف ناقص است:</p>
          <code>Notice: Undefined variable $key — they took the name of the key…</code>
          <!--
            دانشجوهای PHP:
            بعداً این فرم پازل مربوطه را در سشن ست می‌کند و به puzzle می‌رود.
          -->
          <form method="POST" action="puzzle.html">
            <input type="hidden" name="object" value="computer">
            <button class="clue-link" type="submit">رمزگشایی لاگ</button>
          </form>
        </div>
      </article>

      <!-- قفسه کتاب -->
      <article class="object-card" data-object-card>
        <div class="object-top">
          <span class="object-number">02</span>
          <span class="object-icon" aria-hidden="true">📚</span>
        </div>
        <h2>قفسهٔ مدارک</h2>
        <p>جلدها خاک‌خورده‌ان؛ یکی از کتاب‌ها کمی بیرون زده — مثل دندانی که کسی کشیده بیرون.</p>
        <button class="object-button" type="button" data-clue-button aria-expanded="false">
          بازرسی قفسه <span>←</span>
        </button>
        <div class="clue" hidden>
          <p>بین صفحات، یادداشتی با جوهر قرمز: «فهرست شهود به ترتیب دفن شده… از صفر بشمار.»</p>
          <form method="POST" action="puzzle.html">
            <input type="hidden" name="object" value="bookshelf">
            <button class="clue-link" type="submit">خواندن پروندهٔ مخفی</button>
          </form>
        </div>
      </article>

      <!-- کشو -->
      <article class="object-card" data-object-card>
        <div class="object-top">
          <span class="object-number">03</span>
          <span class="object-icon" aria-hidden="true">🗄️</span>
        </div>
        <h2>کشو قفل‌شده</h2>
        <p>زیر میز؛ اثر انگشت روی دستگیره خشک شده. قفل دیجیتال هنوز نفس می‌کشه.</p>
        <button class="object-button" type="button" data-clue-button aria-expanded="false">
          بررسی قفل <span>←</span>
        </button>
        <div class="clue" hidden>
          <p>روی فلز حک شده: «فقط اگر حقیقت برابر باشد، باز می‌شوم.» هیچ کلیدی این‌جا نیست — فقط یک شرط.</p>
          <form method="POST" action="puzzle.html">
            <input type="hidden" name="object" value="drawer">
            <button class="clue-link" type="submit">آزمودن قفل</button>
          </form>
        </div>
      </article>

      <!-- در خروجی -->
      <article class="object-card danger-card" data-object-card>
        <div class="object-top">
          <span class="object-number">04</span>
          <span class="object-icon" aria-hidden="true">🚪</span>
        </div>
        <h2>درِ فولادی خروج</h2>
        <p>آخرین مانع. پشتش صدای راهرو می‌آد… یا شاید فقط نویز سیستم باشد.</p>
        <button class="object-button" type="button" data-clue-button aria-expanded="false">
          نزدیک شدن به در <span>←</span>
        </button>
        <div class="clue" hidden>
          <p>پنل قرمز چشمک می‌زند: «هویت ناقص است. هر چهار مدرک را بیاور — وگرنه متهم بعدی تویی.»</p>
          <!--
            دانشجوهای PHP:
            فقط وقتی همه چالش‌ها کامل شد اجازه فرار بدهید.
          -->
          <form method="POST" action="puzzle.html">
            <input type="hidden" name="object" value="door">
            <button class="clue-link" type="submit">ارائهٔ مدارک نهایی</button>
          </form>
        </div>
      </article>

    </section>
  </main>

  <script src="../assets/app.js"></script>
</body>
</html>
