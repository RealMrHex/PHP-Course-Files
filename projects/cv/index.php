<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="light" data-lang="fa" data-doc="cv">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>آرمین هوشمند</title>
    <link
      href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/app.css" />
    <script>
      (() => {
        const root = document.documentElement;
        const theme =
          localStorage.getItem("cv-theme") ||
          (window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light");
        const lang = localStorage.getItem("cv-lang") === "en" ? "en" : "fa";
        const doc = localStorage.getItem("cv-doc") === "resume" ? "resume" : "cv";

        root.setAttribute("data-theme", theme === "dark" ? "dark" : "light");
        root.setAttribute("data-lang", lang);
        root.setAttribute("data-doc", doc);
        root.setAttribute("lang", lang === "en" ? "en" : "fa");
        root.setAttribute("dir", lang === "en" ? "ltr" : "rtl");
      })();
    </script>
  </head>
  <body>
    <div class="toolbar" aria-label="Toolbar">
      <button type="button" id="doc-btn" class="chip-btn" aria-label="CV / Resume" title="CV / Resume">
        <span class="doc-cv">CV</span>
        <span class="doc-resume">
          <span class="lang-fa">رزومه</span>
          <span class="lang-en">Resume</span>
        </span>
      </button>
      <a class="chip-btn" href="./cover-letter.html" title="Cover Letter">
        <span class="lang-fa">نامه</span>
        <span class="lang-en">Letter</span>
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

    <div class="sheet">
      <aside class="rail" aria-label="Sidebar">
        <header class="rail-brand">
          <p class="rail-kicker">
            <span class="doc-cv">CV</span>
            <span class="doc-resume">
              <span class="lang-fa">رزومه</span>
              <span class="lang-en">Resume</span>
            </span>
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
        </header>

        <section class="rail-block">
          <h2>
            <span class="lang-fa">تماس</span>
            <span class="lang-en">Contact</span>
          </h2>
          <ul class="contact">
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <path d="M6.5 3.5h3l1.5 4-2 1.5a12 12 0 0 0 6 6l1.5-2 4 1.5v3a2 2 0 0 1-2 2A15.5 15.5 0 0 1 4.5 5.5a2 2 0 0 1 2-2z" stroke-linejoin="round" stroke-linecap="round"/>
                </svg>
              </span>
              <a class="ltr" href="tel:+989121234567" dir="ltr">0912 123 4567</a>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <rect x="3.5" y="5.5" width="17" height="13" rx="2"/>
                  <path d="m4.5 7 7.5 6 7.5-6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              <a class="ltr" href="mailto:armin.houshmand@email.com" dir="ltr">armin.houshmand@email.com</a>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <path d="M12 21s6.5-5.2 6.5-11a6.5 6.5 0 1 0-13 0c0 5.8 6.5 11 6.5 11z" stroke-linejoin="round"/>
                  <circle cx="12" cy="10" r="2.2"/>
                </svg>
              </span>
              <span>
                <span class="lang-fa">تهران، ایران</span>
                <span class="lang-en">Tehran, Iran</span>
              </span>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2.2C6.5 2.2 2 6.7 2 12.3c0 4.5 2.9 8.3 6.9 9.6.5.1.7-.2.7-.5v-1.8c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.4 1.1 3 .8.1-.7.4-1.1.6-1.3-2.2-.3-4.6-1.1-4.6-5a3.9 3.9 0 0 1 1-2.7c-.1-.3-.4-1.3.1-2.7 0 0 .8-.3 2.8 1a9.5 9.5 0 0 1 5 0c2-1.3 2.8-1 2.8-1 .5 1.4.2 2.4.1 2.7a3.9 3.9 0 0 1 1 2.7c0 3.9-2.3 4.7-4.6 5 .4.3.7.9.7 1.9v2.8c0 .3.2.6.7.5A10.2 10.2 0 0 0 22 12.3C22 6.7 17.5 2.2 12 2.2z"/>
                </svg>
              </span>
              <a class="ltr" href="https://github.com/armin" target="_blank" rel="noopener noreferrer" dir="ltr">github.com/armin</a>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M6.2 9H3.4v12h2.8V9zM4.8 3.5A1.7 1.7 0 1 0 4.8 7a1.7 1.7 0 0 0 0-3.5zM20.6 9h-2.8v1.6h0c-.4-.8-1.5-1.8-3.2-1.8-3.4 0-4 2.4-4 5V21h2.8v-6.4c0-1.5 0-3.5 2.1-3.5s2.2 1.7 2.2 3.6V21h2.8V9z"/>
                </svg>
              </span>
              <a class="ltr" href="https://linkedin.com/in/armin" target="_blank" rel="noopener noreferrer" dir="ltr">linkedin.com/in/armin</a>
            </li>
          </ul>
        </section>

        <section class="rail-block">
          <h2>
            <span class="lang-fa">مهارت‌ها</span>
            <span class="lang-en">Skills</span>
          </h2>
          <div class="skills">
            <div class="skill">
              <h3>Backend</h3>
              <ul class="chips">
                <li>PHP</li>
                <li>Laravel</li>
                <li>REST API</li>
                <li>Eloquent</li>
              </ul>
            </div>
            <div class="skill">
              <h3>
                <span class="lang-fa">داده</span>
                <span class="lang-en">Data</span>
              </h3>
              <ul class="chips">
                <li>MySQL</li>
                <li>PostgreSQL</li>
                <li>Redis</li>
              </ul>
            </div>
            <div class="skill">
              <h3>
                <span class="lang-fa">ابزار</span>
                <span class="lang-en">Tools</span>
              </h3>
              <ul class="chips">
                <li>Git</li>
                <li>Docker</li>
                <li>Linux</li>
                <li>CI/CD</li>
              </ul>
            </div>
            <div class="skill">
              <h3>
                <span class="lang-fa">کیفیت</span>
                <span class="lang-en">Quality</span>
              </h3>
              <ul class="chips">
                <li>PHPUnit</li>
                <li>Pest</li>
                <li>Code Review</li>
              </ul>
            </div>
          </div>
        </section>

        <section class="rail-block cv-only">
          <h2>
            <span class="lang-fa">گواهینامه‌ها</span>
            <span class="lang-en">Certificates</span>
          </h2>
          <ul class="certs">
            <li>
              <strong>Laravel Certified Developer</strong>
              <span>
                <span class="lang-fa">۱۴۰۲</span>
                <span class="lang-en">2023</span>
              </span>
            </li>
            <li>
              <strong>AWS Cloud Practitioner</strong>
              <span>
                <span class="lang-fa">۱۴۰۱</span>
                <span class="lang-en">2022</span>
              </span>
            </li>
            <li>
              <strong>Docker Essentials</strong>
              <span>
                <span class="lang-fa">۱۴۰۰</span>
                <span class="lang-en">2021</span>
              </span>
            </li>
          </ul>
        </section>

        <section class="rail-block cv-only">
          <h2>
            <span class="lang-fa">افتخارات</span>
            <span class="lang-en">Awards</span>
          </h2>
          <ul class="certs">
            <li>
              <strong>
                <span class="lang-fa">بهترین عملکرد فنی تیم</span>
                <span class="lang-en">Best Technical Performance</span>
              </strong>
              <span>
                <span class="lang-fa">۱۴۰۲</span>
                <span class="lang-en">2023</span>
              </span>
            </li>
            <li>
              <strong>
                <span class="lang-fa">رتبه برتر هکاتون داخلی</span>
                <span class="lang-en">Internal Hackathon Winner</span>
              </strong>
              <span>
                <span class="lang-fa">۱۴۰۰</span>
                <span class="lang-en">2021</span>
              </span>
            </li>
          </ul>
        </section>

        <section class="rail-block">
          <h2>
            <span class="lang-fa">زبان‌ها</span>
            <span class="lang-en">Languages</span>
          </h2>
          <ul class="langs">
            <li>
              <span>
                <span class="lang-fa">فارسی</span>
                <span class="lang-en">Persian</span>
              </span>
              <span>
                <span class="lang-fa">بومی</span>
                <span class="lang-en">Native</span>
              </span>
            </li>
            <li>
              <span>
                <span class="lang-fa">انگلیسی</span>
                <span class="lang-en">English</span>
              </span>
              <span>
                <span class="lang-fa">حرفه‌ای کاری</span>
                <span class="lang-en">Professional</span>
              </span>
            </li>
          </ul>
        </section>
      </aside>

      <main class="main">
        <section class="block">
          <h2>
            <span class="lang-fa">خلاصه حرفه‌ای</span>
            <span class="lang-en">Professional Summary</span>
          </h2>
          <p class="summary">
            <span class="lang-fa">
              توسعه‌دهنده PHP با بیش از ۶ سال تجربه در سامانه‌های تحت وب و APIهای REST.
              تمرکز روی Laravel، مدل‌سازی داده، پایداری سرویس و تحویل قابل اعتماد.
            </span>
            <span class="lang-en">
              PHP developer with 6+ years of experience building web systems and REST APIs.
              Focused on Laravel, data modeling, service reliability, and dependable delivery.
            </span>
          </p>
        </section>

        <section class="block">
          <h2>
            <span class="lang-fa">سوابق شغلی</span>
            <span class="lang-en">Experience</span>
          </h2>

          <ol class="timeline">
            <li class="timeline-item">
              <div class="timeline-axis" aria-hidden="true"><span class="dot"></span></div>
              <article class="job">
                <div class="job-head">
                  <div>
                    <h3>
                      <span class="lang-fa">توسعه‌دهنده ارشد Backend</span>
                      <span class="lang-en">Senior Backend Developer</span>
                    </h3>
                    <p class="org">
                      <span class="lang-fa">شرکت فناوری ابرنو · تهران</span>
                      <span class="lang-en">Abarno Tech · Tehran</span>
                    </p>
                  </div>
                  <time datetime="2022/2026">
                    <span class="lang-fa">۱۴۰۱ — اکنون</span>
                    <span class="lang-en">2022 — Present</span>
                  </time>
                </div>
                <p class="desc">
                  <span class="lang-fa">مسئول هسته بک‌اند محصولات SaaS؛ از طراحی API و مدل داده تا پایداری و امنیت.</span>
                  <span class="lang-en">Owned SaaS backend core: API design, data models, reliability, and security.</span>
                </p>
                <ul>
                  <li>
                    <span class="lang-fa">طراحی و پیاده‌سازی APIهای REST برای وب و موبایل</span>
                    <span class="lang-en">Designed and shipped REST APIs for web and mobile clients</span>
                  </li>
                  <li>
                    <span class="lang-fa">بهینه‌سازی MySQL و کاهش زمان پاسخ سرویس‌های پرمصرف ≈ ۴۰٪</span>
                    <span class="lang-en">Optimized MySQL and cut response time on heavy services by ~40%</span>
                  </li>
                  <li>
                    <span class="lang-fa">صف‌ها و Jobهای Redis برای اعلان و گزارش‌گیری</span>
                    <span class="lang-en">Built Redis queues/jobs for notifications and reporting</span>
                  </li>
                  <li>
                    <span class="lang-fa">استانداردسازی کد، Code Review و استقرار با Docker / CI</span>
                    <span class="lang-en">Improved standards, code review, and Docker/CI delivery</span>
                  </li>
                </ul>
              </article>
            </li>

            <li class="timeline-item">
              <div class="timeline-axis" aria-hidden="true"><span class="dot"></span></div>
              <article class="job">
                <div class="job-head">
                  <div>
                    <h3>
                      <span class="lang-fa">توسعه‌دهنده PHP / Laravel</span>
                      <span class="lang-en">PHP / Laravel Developer</span>
                    </h3>
                    <p class="org">
                      <span class="lang-fa">استودیو نرم‌افزار پارس‌کد · تهران</span>
                      <span class="lang-en">Parscode Studio · Tehran</span>
                    </p>
                  </div>
                  <time datetime="2019/2022">
                    <span class="lang-fa">۱۳۹۸ — ۱۴۰۰</span>
                    <span class="lang-en">2019 — 2022</span>
                  </time>
                </div>
                <p class="desc">
                  <span class="lang-fa">توسعه سامانه‌های سفارشی کسب‌وکار؛ احراز هویت، دسترسی و یکپارچه‌سازی سرویس‌ها.</span>
                  <span class="lang-en">Built custom business systems: auth, access control, and service integrations.</span>
                </p>
                <ul>
                  <li>
                    <span class="lang-fa">ماژول‌های محتوا، سفارش و گزارش با Laravel و Eloquent</span>
                    <span class="lang-en">Delivered content, order, and reporting modules with Laravel/Eloquent</span>
                  </li>
                  <li>
                    <span class="lang-fa">پیاده‌سازی نقش‌ها و کنترل دسترسی چندنقشی</span>
                    <span class="lang-en">Implemented roles and multi-role access control</span>
                  </li>
                  <li>
                    <span class="lang-fa">اتصال درگاه پرداخت و سرویس پیامکی</span>
                    <span class="lang-en">Integrated payment gateways and SMS providers</span>
                  </li>
                  <li>
                    <span class="lang-fa">تعریف قرارداد API شفاف برای تیم فرانت‌اند</span>
                    <span class="lang-en">Defined clear API contracts for frontend teams</span>
                  </li>
                </ul>
              </article>
            </li>

            <li class="timeline-item">
              <div class="timeline-axis" aria-hidden="true"><span class="dot"></span></div>
              <article class="job">
                <div class="job-head">
                  <div>
                    <h3>
                      <span class="lang-fa">کارآموز توسعه وب</span>
                      <span class="lang-en">Web Development Intern</span>
                    </h3>
                    <p class="org">
                      <span class="lang-fa">شرکت نرم‌افزاری نوآوران · تهران</span>
                      <span class="lang-en">Noavaran Software · Tehran</span>
                    </p>
                  </div>
                  <time datetime="2018/2019">
                    <span class="lang-fa">۱۳۹۷ — ۱۳۹۸</span>
                    <span class="lang-en">2018 — 2019</span>
                  </time>
                </div>
                <p class="desc">
                  <span class="lang-fa">ورود عملی به چرخه محصول؛ نگهداری کد، Git، لینوکس و انتشار نسخه.</span>
                  <span class="lang-en">Joined the product cycle: maintenance, Git, Linux, and releases.</span>
                </p>
                <ul>
                  <li>
                    <span class="lang-fa">توسعه و رفع باگ ماژول‌های PHP</span>
                    <span class="lang-en">Developed and fixed PHP modules</span>
                  </li>
                  <li>
                    <span class="lang-fa">تست پایه و مستندسازی تغییرات</span>
                    <span class="lang-en">Wrote basic tests and documented changes</span>
                  </li>
                </ul>
              </article>
            </li>
          </ol>
        </section>

        <section class="block">
          <h2>
            <span class="lang-fa">پروژه‌های منتخب</span>
            <span class="lang-en">Selected Projects</span>
          </h2>
          <div class="projects">
            <article class="project">
              <h3>
                <span class="lang-fa">سامانه مدیریت سفارش چندمستأجری</span>
                <span class="lang-en">Multi-tenant Order Platform</span>
                <span class="tech ltr" dir="ltr">Laravel · MySQL · Redis</span>
              </h3>
              <p>
                <span class="lang-fa">پلتفرم سفارش و موجودی برای چند کسب‌وکار؛ جداسازی داده مستأجرها، گزارش فروش و صف‌های پس‌زمینه.</span>
                <span class="lang-en">Order and inventory platform for multiple businesses with tenant isolation, sales reports, and background jobs.</span>
              </p>
              <p class="project-links">
                <a class="ltr" href="https://github.com/armin/order-platform" target="_blank" rel="noopener noreferrer" dir="ltr">GitHub</a>
                <a class="ltr" href="https://demo.example.com/orders" target="_blank" rel="noopener noreferrer" dir="ltr">Demo</a>
              </p>
            </article>

            <article class="project">
              <h3>
                <span class="lang-fa">پنل رزرو آنلاین و نوبت‌دهی</span>
                <span class="lang-en">Online Booking Panel</span>
                <span class="tech ltr" dir="ltr">Laravel · Payment · SMS</span>
              </h3>
              <p>
                <span class="lang-fa">نوبت‌دهی با ظرفیت، پرداخت آنلاین، یادآوری پیامکی و پنل مدیریت رزرو برای مراکز خدماتی.</span>
                <span class="lang-en">Booking system with capacity, online payments, SMS reminders, and an admin panel for service centers.</span>
              </p>
              <p class="project-links">
                <a class="ltr" href="https://github.com/armin/booking-panel" target="_blank" rel="noopener noreferrer" dir="ltr">GitHub</a>
                <a class="ltr" href="https://demo.example.com/booking" target="_blank" rel="noopener noreferrer" dir="ltr">Demo</a>
              </p>
            </article>

            <article class="project">
              <h3>
                <span class="lang-fa">API احراز هویت و دسترسی</span>
                <span class="lang-en">Auth & Access API</span>
                <span class="tech ltr" dir="ltr">Sanctum · RBAC · PHPUnit</span>
              </h3>
              <p>
                <span class="lang-fa">سرویس مرکزی ورود، توکن و نقش/مجوز برای چند محصول داخلی با تست خودکار و مستندسازی قرارداد API.</span>
                <span class="lang-en">Central login, token, and role/permission service for internal products with automated tests and API docs.</span>
              </p>
              <p class="project-links">
                <a class="ltr" href="https://github.com/armin/auth-service" target="_blank" rel="noopener noreferrer" dir="ltr">GitHub</a>
                <a class="ltr" href="https://docs.example.com/auth" target="_blank" rel="noopener noreferrer" dir="ltr">Docs</a>
              </p>
            </article>
          </div>
        </section>

        <section class="block cv-only">
          <h2>
            <span class="lang-fa">متن‌باز و سخنرانی</span>
            <span class="lang-en">Open Source & Talks</span>
          </h2>
          <ul class="extra-list">
            <li>
              <strong class="ltr" dir="ltr">laravel-query-kit</strong>
              —
              <span class="lang-fa">ابزار کمکی بهینه‌سازی کوئری (GitHub)</span>
              <span class="lang-en">Helper toolkit for query optimization (GitHub)</span>
            </li>
            <li>
              <strong>
                <span class="lang-fa">کارگاه API Design با Laravel</span>
                <span class="lang-en">Laravel API Design Workshop</span>
              </strong>
              —
              <span class="lang-fa">ارائه داخلی تیم · ۱۴۰۲</span>
              <span class="lang-en">Internal team talk · 2023</span>
            </li>
          </ul>
        </section>

        <section class="block">
          <h2>
            <span class="lang-fa">تحصیلات</span>
            <span class="lang-en">Education</span>
          </h2>
          <article class="edu">
            <div>
              <h3>
                <span class="lang-fa">کارشناسی مهندسی نرم‌افزار</span>
                <span class="lang-en">B.Sc. Software Engineering</span>
              </h3>
              <p>
                <span class="lang-fa">دانشگاه علم و صنعت ایران</span>
                <span class="lang-en">Iran University of Science and Technology</span>
              </p>
            </div>
            <time datetime="2014/2018">
              <span class="lang-fa">۱۳۹۳ — ۱۳۹۷</span>
              <span class="lang-en">2014 — 2018</span>
            </time>
          </article>
        </section>
      </main>
    </div>

    <script src="./assets/app.js"></script>
  </body>
</html>
