<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>مدرک ۰۱ | اتاق فرار PHP</title>
  <link rel="stylesheet" href="../assets/app.css">
</head>
<body>
  <div class="ambient-grid" aria-hidden="true"></div>

  <header class="game-header">
    <a class="brand" href="index.html"><span>&lt;?php</span> اتاق فرار</a>
    <a class="back-link" href="room.html">بازگشت به صحنه →</a>
  </header>

  <main class="puzzle-layout">
    <section class="puzzle-card">
      <div class="puzzle-heading">
        <div>
          <p class="eyebrow">مدرک <!-- PHP: شماره پازل اینجا -->۰۱ · ترمینال قربانی</p>
          <!-- PHP: عنوان پازل اینجا -->
          <h1>نامِ کلیدِ دزدیده‌شده</h1>
        </div>
        <span class="difficulty">طبقه‌بندی: محرمانه</span>
      </div>

      <!-- PHP: توضیح پازل اینجا -->
      <p class="puzzle-description">
        کسی متغیر را از حافظه پاک کرده — اما اثر جنایت هنوز روی صفحه است.
        سیستم می‌خواد چیزی را فاش کند که دیگر وجود ندارد.
        اگر نام واقعی کلید را به پرونده برگردانی، لاگ دوباره حرف می‌زند.
      </p>

      <div class="code-window">
        <div class="window-bar">
          <span></span><span></span><span></span>
          <small>evidence_01.php</small>
        </div>
        <pre><code><span class="code-muted">01</span>  &lt;?php
<span class="code-muted">02</span>  echo $access_key;
<span class="code-muted">03</span>  ?&gt;</code></pre>
      </div>

      <!--
        دانشجوهای PHP:
        مقصد فرم و اعتبارسنجی جواب را سمت سرور انجام دهید.
      -->
      <form method="POST" action="puzzle.html" class="answer-form">
        <!-- PHP: شناسه پازل مخفی اینجا -->
        <input type="hidden" name="puzzle_id" value="computer_01">

        <fieldset>
          <!-- PHP: متن سؤال اینجا -->
          <legend>کدام خط، هویت گم‌شدهٔ متغیر را درست به پرونده برمی‌گرداند؟</legend>

          <!-- PHP: حلقه گزینه‌ها با foreach -->
          <label class="answer-option">
            <input type="radio" name="answer" value="a" required>
            <span class="choice-letter">A</span>
            <code>access_key = "7319";</code>
          </label>
          <label class="answer-option">
            <input type="radio" name="answer" value="b">
            <span class="choice-letter">B</span>
            <code>$access_key = "7319";</code>
          </label>
          <label class="answer-option">
            <input type="radio" name="answer" value="c">
            <span class="choice-letter">C</span>
            <code>var access_key = "7319";</code>
          </label>
          <label class="answer-option">
            <input type="radio" name="answer" value="d">
            <span class="choice-letter">D</span>
            <code>$access_key == "7319";</code>
          </label>
        </fieldset>

        <button class="primary-button" type="submit">
          <span>ثبت در پرونده</span>
          <span aria-hidden="true">←</span>
        </button>
      </form>

      <!-- PHP: نتیجه جواب یا پیام بازی اینجا -->
      <div class="system-message" role="status" hidden data-answer-message></div>
    </section>
  </main>

  <script src="../assets/app.js"></script>
</body>
</html>
