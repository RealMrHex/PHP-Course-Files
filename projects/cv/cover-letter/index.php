<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="light" data-lang="fa" data-page="letter">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cover Letter — آرمین هوشمند</title>
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./../assets/app.css" />
    <script>
      (() => {
        const root = document.documentElement;
        const theme =
          localStorage.getItem("cv-theme") ||
          (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
        const lang = localStorage.getItem("cv-lang") === "en" ? "en" : "fa";

        root.setAttribute("data-theme", theme === "dark" ? "dark" : "light");
        root.setAttribute("data-lang", lang);
        root.setAttribute("lang", lang === "en" ? "en" : "fa");
        root.setAttribute("dir", lang === "en" ? "ltr" : "rtl");
      })();
    </script>
  </head>
  <body>
    
    <?php
      include_once '../components/toolbar.php';
      include_once '../data/coverletter.php';
    ?>

    <div class="sheet letter-sheet">
      <header class="letter-top">
        <div class="letter-brand">
          <p class="letter-kicker">
            <span class="lang-fa">نامه همراه</span>
            <span class="lang-en">Cover Letter</span>
          </p>
          <h1 class="name">
            <span class="lang-fa"><?= $data['header']['fullname']['fa'] ?></span>
            <span class="lang-en"><?= $data['header']['fullname']['en'] ?></span>
          </h1>
          <p class="role">
            <span class="lang-fa"><?= $data['header']['role']['fa'] ?></span>
            <span class="lang-en"><?= $data['header']['role']['en'] ?></span>
          </p>
          <p class="stack ltr" dir="ltr">PHP · Laravel</p>
        </div>
        <ul class="letter-contact">
          <li>
            <a class="ltr" href="tel:<?= $data['header']['mobile']['link'] ?>" dir="ltr">
              <?= $data['header']['mobile']['visual'] ?>
            </a>
          </li>
          <li>
            </li>
            <a class="ltr" href="mailto:<?= $data['header']['email'] ?>" dir="ltr"><?= $data['header']['email'] ?></a>
          <li>
            <span class="lang-fa"><?= $data['header']['location']['fa'] ?></span>
            <span class="lang-en"><?= $data['header']['location']['en'] ?></span>
          </li>
          <li>
            <a class="ltr" href="https://github.com/<?= $data['header']['github'] ?>" target="_blank" rel="noopener noreferrer" dir="ltr">github.com/<?= $data['header']['github'] ?></a>
          </li>
        </ul>
      </header>

      <div class="letter-content">
        <div class="letter-meta">
          <p class="letter-date">
            <span class="lang-fa"><?= $data['content']['date']['fa'] ?></span>
            <span class="lang-en"><?= $data['content']['date']['en'] ?></span>
          </p>

          <div class="letter-to">
            <p class="letter-label">
              <span class="lang-fa">گیرنده</span>
              <span class="lang-en">To</span>
            </p>
            <p>
              <span class="lang-fa"><?= $data['content']['receiver']['fa'] ?></span>
              <span class="lang-en"><?= $data['content']['receiver']['en'] ?></span>
            </p>
            <p>
              <span class="lang-fa"><?= $data['content']['company']['fa'] ?></span>
              <span class="lang-en"><?= $data['content']['company']['en'] ?></span>
            </p>
            <p>
              <span class="lang-fa"><?= $data['content']['location']['fa'] ?></span>
              <span class="lang-en"><?= $data['content']['location']['en'] ?></span>
            </p>
          </div>

          <p class="letter-subject">
            <span class="letter-label">
              <span class="lang-fa">موضوع</span>
              <span class="lang-en">Subject</span>
            </span>
              <span class="lang-fa"><?= $data['content']['title']['fa'] ?></span>
              <span class="lang-en"><?= $data['content']['title']['en'] ?></span>
          </p>
        </div>

        <div class="letter-body">
          <p>
            <span class="lang-fa">با سلام و احترام،</span>
            <span class="lang-en">Dear Hiring Manager,</span>
          </p>
          <p>
            <span class="lang-fa">
              با توجه به فرصت شغلی توسعه‌دهنده Backend در مجموعه شما، مایل‌ام آمادگی خود را برای همکاری اعلام کنم.
              بیش از ۶ سال تجربه در توسعه سامانه‌های تحت وب و API با PHP و Laravel دارم و روی ساخت سرویس‌های پایدار، قابل نگهداری و هم‌راستا با نیاز محصول تمرکز می‌کنم.
            </span>
            <span class="lang-en">
              I am writing to apply for the Backend Developer role at your company.
              With 6+ years of experience building web systems and APIs in PHP and Laravel, I focus on reliable, maintainable services that support real product needs.
            </span>
          </p>
          <p>
            <span class="lang-fa">
              در نقش فعلی‌ام، طراحی API، بهینه‌سازی پایگاه‌داده و پیاده‌سازی پردازش‌های ناهم‌زمان با Redis را بر عهده داشته‌ام
              و با بهبود عملکرد سرویس‌های پرمصرف، زمان پاسخ را حدود ۴۰٪ کاهش داده‌ام. همچنین تجربه کار نزدیک با تیم‌های محصول و فرانت‌اند برای تحویل شفاف و پایدار را دارم.
            </span>
            <span class="lang-en">
              In my current role, I have owned API design, database optimization, and asynchronous processing with Redis,
              including reducing response time on high-traffic services by about 40%. I also work closely with product and frontend teams to deliver clear, dependable outcomes.
            </span>
          </p>
          <p>
            <span class="lang-fa">
              خوشحال می‌شوم در صورت نیاز، جزئیات بیشتری از پروژه‌ها و نمونه‌کارها را ارائه دهم.
              از وقت شما سپاسگزارم و مشتاق گفت‌وگوی بیشتر هستم.
            </span>
            <span class="lang-en">
              I would be glad to share more details about my projects and work samples if helpful.
              Thank you for your time — I look forward to the possibility of speaking further.
            </span>
          </p>
        </div>

        <footer class="letter-close">
          <p>
            <span class="lang-fa">با احترام،</span>
            <span class="lang-en">Best regards,</span>
          </p>
          <p class="letter-sign">
              <span class="lang-fa"><?= $data['header']['fullname']['fa'] ?></span>
              <span class="lang-en"><?= $data['header']['fullname']['en'] ?></span>
          </p>
        </footer>
      </div>
    </div>

    <script src="./../assets/app.js"></script>
  </body>
</html>
