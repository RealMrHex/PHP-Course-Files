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
    <div class="toolbar" aria-label="Toolbar">
      <a class="chip-btn" href="./index.html" title="CV / Resume">
        <span class="lang-fa">رزومه</span>
        <span class="lang-en">Resume</span>
      </a>
      <button type="button" id="lang-btn" class="chip-btn lang-chip" aria-label="Language" title="Language">
        <span class="lang-fa">English</span>
        <span class="lang-en">فارسی</span>
      </button>
      <button type="button" id="theme-btn" class="icon-btn" aria-pressed="false" aria-label="Theme" title="Theme">
        <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <circle cx="12" cy="12" r="4"/>
          <path stroke-linecap="round" d="M12 3v2M12 19v2M3 12h2M19 12h2M5.6 5.6l1.4 1.4M17 17l1.4 1.4M5.6 18.4 7 17M17 7l1.4-1.4"/>
        </svg>
        <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
        </svg>
      </button>
      <button type="button" id="print-btn" class="icon-btn" aria-label="Print" title="Print / PDF">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
          <path stroke-linejoin="round" d="M7 8V4h10v4"/>
          <path stroke-linejoin="round" d="M7 16H5a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"/>
          <rect x="7" y="14" width="10" height="6" rx="1"/>
        </svg>
      </button>
    </div>

    <div class="sheet letter-sheet">
      <header class="letter-top">
        <div class="letter-brand">
          <p class="letter-kicker">
            <span class="lang-fa">نامه همراه</span>
            <span class="lang-en">Cover Letter</span>
          </p>
          <h1 class="name">
            <span class="lang-fa">آرمین هوشمند</span>
            <span class="lang-en">Armin Houshmand</span>
          </h1>
          <p class="role">
            <span class="lang-fa">توسعه‌دهنده Backend</span>
            <span class="lang-en">Backend Developer</span>
          </p>
          <p class="stack ltr" dir="ltr">PHP · Laravel</p>
        </div>
        <ul class="letter-contact">
          <li>
            <a class="ltr" href="tel:+989121234567" dir="ltr">0912 123 4567</a>
          </li>
          <li>
            <a class="ltr" href="mailto:armin.houshmand@email.com" dir="ltr">armin.houshmand@email.com</a>
          </li>
          <li>
            <span class="lang-fa">تهران، ایران</span>
            <span class="lang-en">Tehran, Iran</span>
          </li>
          <li>
            <a class="ltr" href="https://github.com/armin" target="_blank" rel="noopener noreferrer" dir="ltr">github.com/armin</a>
          </li>
        </ul>
      </header>

      <div class="letter-content">
        <div class="letter-meta">
          <p class="letter-date">
            <span class="lang-fa">۹ مرداد ۱۴۰۵</span>
            <span class="lang-en">August 9, 2026</span>
          </p>

          <div class="letter-to">
            <p class="letter-label">
              <span class="lang-fa">گیرنده</span>
              <span class="lang-en">To</span>
            </p>
            <p>
              <span class="lang-fa">مدیر منابع انسانی محترم</span>
              <span class="lang-en">Hiring Manager</span>
            </p>
            <p>
              <span class="lang-fa">نام شرکت</span>
              <span class="lang-en">Company Name</span>
            </p>
            <p>
              <span class="lang-fa">تهران، ایران</span>
              <span class="lang-en">Tehran, Iran</span>
            </p>
          </div>

          <p class="letter-subject">
            <span class="letter-label">
              <span class="lang-fa">موضوع</span>
              <span class="lang-en">Subject</span>
            </span>
            <span class="lang-fa">درخواست همکاری به‌عنوان توسعه‌دهنده Backend (PHP / Laravel)</span>
            <span class="lang-en">Application for Backend Developer (PHP / Laravel)</span>
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
            <span class="lang-fa">آرمین هوشمند</span>
            <span class="lang-en">Armin Houshmand</span>
          </p>
        </footer>
      </div>
    </div>

    <script src="./../assets/app.js"></script>
  </body>
</html>
