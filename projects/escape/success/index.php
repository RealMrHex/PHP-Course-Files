<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>پرونده بسته شد | اتاق فرار PHP</title>
  <link rel="stylesheet" href="../assets/app.css">
</head>
<body class="success-page">
  <div class="ambient-grid" aria-hidden="true"></div>

  <main class="success-shell">
    <section class="success-card">
      <div class="success-icon" aria-hidden="true">✓</div>
      <p class="eyebrow">وضعیت: خروج تأیید شد</p>
      <h1>از صحنه زنده بیرون آمدی<span>.</span></h1>
      <p class="success-copy">
        درِ فولادی با صدای خفه‌ای باز می‌شود. لامپ‌های راهرو یکی‌یکی روشن می‌شوند —
        انگار کسی از قبل مسیر فرارت را چیده بود.
        پرونده هنوز نیمه‌کاره است… ولی حداقل، نام تو روی لیست قربانی‌ها نیست.
      </p>

      <div class="final-score">
        <span>امتیاز پرونده</span>
        <!-- PHP: امتیاز نهایی اینجا -->
        <strong>۰۸۵۰</strong>
        <!-- PHP: نام بازیکن اینجا -->
        <small>بازپرس: سایه‌بان</small>
      </div>

      <div class="challenge-list">
        <h2>مدارک جمع‌آوری‌شده</h2>
        <!-- PHP: حلقه روی چالش‌های تکمیل‌شده اینجا -->
        <ul>
          <li>
            <span>✓</span>
            <div>
              <strong>نامِ کلیدِ دزدیده‌شده</strong>
              <small>ترمینال قربانی — هویت متغیر بازیابی شد</small>
            </div>
          </li>
          <li>
            <span>✓</span>
            <div>
              <strong>فهرست شهود دفن‌شده</strong>
              <small>قفسهٔ مدارک — ترتیب پنهان افشا شد</small>
            </div>
          </li>
          <li>
            <span>✓</span>
            <div>
              <strong>شرطِ قفل خونین</strong>
              <small>کشو — حقیقت با مقایسه جور شد</small>
            </div>
          </li>
          <li>
            <span>✓</span>
            <div>
              <strong>جمعِ دو اعتراف</strong>
              <small>درِ فولادی — کد نهایی پذیرفته شد</small>
            </div>
          </li>
        </ul>
      </div>

      <!--
        دانشجوهای PHP:
        بعداً می‌توانید با فرم POST سشن را ریست کنید.
      -->
      <form method="POST" action="index.html">
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
