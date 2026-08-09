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
    <?php
      $data = [];
      include_once './components/toolbar.php';
      include_once './data/cv.php';
    ?>
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
            <span class="lang-fa"><?= $data['personal_info']['fullname']['fa'] ?></span>
            <span class="lang-en"><?= $data['personal_info']['fullname']['en'] ?></span>
          </h1>
          <p class="role">
            <span class="lang-fa"><?= $data['personal_info']['role']['fa'] ?></span>
            <span class="lang-en"><?= $data['personal_info']['role']['en'] ?></span>
          </p>
          <p class="stack ltr" dir="ltr">
            <?php 
              for($i = 0; $i < count($data['personal_info']['skills']); $i++)
              {
                echo $data['personal_info']['skills'][$i];
                
                if($i != count($data['personal_info']['skills']) - 1)
                {
                  echo '・';
                }
              }
            ?>
          </p>
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
              <a class="ltr" href="tel:<?= $data['personal_info']['contacts']['mobile']['link'] ?>" dir="ltr"><?= $data['personal_info']['contacts']['mobile']['visual'] ?></a>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <rect x="3.5" y="5.5" width="17" height="13" rx="2"/>
                  <path d="m4.5 7 7.5 6 7.5-6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
              <a class="ltr" href="mailto:<?= $data['personal_info']['contacts']['email'] ?>" dir="ltr"><?= $data['personal_info']['contacts']['email'] ?></a>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <path d="M12 21s6.5-5.2 6.5-11a6.5 6.5 0 1 0-13 0c0 5.8 6.5 11 6.5 11z" stroke-linejoin="round"/>
                  <circle cx="12" cy="10" r="2.2"/>
                </svg>
              </span>
              <span>
            <span class="lang-fa"><?= $data['personal_info']['contacts']['location']['fa'] ?></span>
            <span class="lang-en"><?= $data['personal_info']['contacts']['location']['en'] ?></span>
              </span>
            </li>
            <li>
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2.2C6.5 2.2 2 6.7 2 12.3c0 4.5 2.9 8.3 6.9 9.6.5.1.7-.2.7-.5v-1.8c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.5 1 1.5 1 .9 1.5 2.4 1.1 3 .8.1-.7.4-1.1.6-1.3-2.2-.3-4.6-1.1-4.6-5a3.9 3.9 0 0 1 1-2.7c-.1-.3-.4-1.3.1-2.7 0 0 .8-.3 2.8 1a9.5 9.5 0 0 1 5 0c2-1.3 2.8-1 2.8-1 .5 1.4.2 2.4.1 2.7a3.9 3.9 0 0 1 1 2.7c0 3.9-2.3 4.7-4.6 5 .4.3.7.9.7 1.9v2.8c0 .3.2.6.7.5A10.2 10.2 0 0 0 22 12.3C22 6.7 17.5 2.2 12 2.2z"/>
                </svg>
              </span>
              <a class="ltr" href="https://github.com/<?= $data['personal_info']['contacts']['github'] ?>" target="_blank" rel="noopener noreferrer" dir="ltr">github.com/<?= $data['personal_info']['contacts']['github'] ?></a>
            </li>
          </ul>
        </section>

        <section class="rail-block">
          <h2>
            <span class="lang-fa">مهارت‌ها</span>
            <span class="lang-en">Skills</span>
          </h2>
          <div class="skills">
            <?php
              foreach($data['skills'] as $skill)
              {
                echo '<div class="skill">';
                echo '<h3>';
                echo '<span class="lang-fa">' . $skill['title']['fa'] . '</span>';
                echo '<span class="lang-en">' . $skill['title']['en'] . '</span>';
                echo '</h3>';
                echo '<ul class="chips">';
                foreach($skill['items'] as $item)
                {
                  echo "<li>$item</li>";
                }
                echo '</ul>';
                echo '</div>';
              }
            ?>
        </section>

        <section class="rail-block cv-only">
          <h2>
            <span class="lang-fa">گواهینامه‌ها</span>
            <span class="lang-en">Certificates</span>
          </h2>
          <ul class="certs">
            <?php
              foreach($data['certificates'] as $certificate)
              {
                echo '<li>';
                echo '<strong>';
                echo '<span class="lang-fa">' . $certificate['title']['fa'] . '</span>';
                echo '<span class="lang-en">' . $certificate['title']['en'] .'</span>';
                echo '</strong>';
                echo '<span>';
                echo '<span class="lang-fa">' . $certificate['year']['fa'] . '</span>';
                echo '<span class="lang-en">' . $certificate['year']['en'] . '</span>';
                echo '</span>';
                echo '</li>';
              }
            ?>
          </ul>
        </section>

        <section class="rail-block cv-only">
          <h2>
            <span class="lang-fa">افتخارات</span>
            <span class="lang-en">Awards</span>
          </h2>
          <ul class="certs">
            <?php
              foreach($data['awards'] as $awards)
              {
                echo '<li>';
                echo '<strong>';
                echo '<span class="lang-fa">' . $awards['title']['fa'] . '</span>';
                echo '<span class="lang-en">' . $awards['title']['en'] .'</span>';
                echo '</strong>';
                echo '<span>';
                echo '<span class="lang-fa">' . $awards['year']['fa'] . '</span>';
                echo '<span class="lang-en">' . $awards['year']['en'] . '</span>';
                echo '</span>';
                echo '</li>';
              }
            ?>
          </ul>
        </section>

        <section class="rail-block">
          <h2>
            <span class="lang-fa">زبان‌ها</span>
            <span class="lang-en">Languages</span>
          </h2>
          <ul class="langs">
            <?php
            foreach($data['languages'] as $language)
            {
              echo '<li>';
              echo '<span>';
              echo '<span class="lang-fa">' . $language['title']['fa'] . '</span>';
              echo '<span class="lang-en">' . $language['title']['en'] . '</span>';
              echo '</span>';
              echo '<span>';
              echo '<span class="lang-fa">' . $language['seniority']['fa'] . '</span>';
              echo '<span class="lang-en">' . $language['seniority']['en'] . '</span>';
              echo '</span>';
              echo '</li>';
            }
            ?>
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
            <span class="lang-fa"><?= $data['biography']['fa'] ?></span>
            <span class="lang-en"><?= $data['biography']['en'] ?></span>
          </p>
        </section>

        <section class="block">
          <h2>
            <span class="lang-fa">سوابق شغلی</span>
            <span class="lang-en">Experience</span>
          </h2>

          <ol class="timeline">
            <?php
            foreach($data['careers'] as $career)
            {
              echo '<li class="timeline-item">';
              echo '<div class="timeline-axis" aria-hidden="true"><span class="dot"></span></div>';
              echo '<article class="job">';

              #============JOB HEAD==========
              echo '<div class="job-head">';

              echo '<div>';
              echo '<h3>';
              echo '<span class="lang-fa">' . $career['position']['fa'] . '</span>';
              echo '<span class="lang-en">' . $career['position']['en'] .'</span>';
              echo '</h3>';

              echo '<p class="org">';
              echo '<span class="lang-fa">' . $career['company']['fa'] . '</span>';
              echo '<span class="lang-en">' . $career['company']['en'] . '</span>';
              echo '</p>';

              echo '<time datetime="' . $career['years']['start']['en'] . '/' . $career['years']['end']['en'] . '">';
              echo '<span class="lang-fa">' . $career['years']['start']['fa'] . ' - ' . $career['years']['end']['fa'] . '</span>';
              echo '<span class="lang-en">' . $career['years']['start']['en'] . ' - ' . $career['years']['end']['en'] . '</span>';
              echo '</time>';
              echo '</div>';

              echo '</div>';
              #============DESCRIPTION==========
              echo '<p class="desc">';
              echo '<span class="lang-fa">' . $career['brief']['fa'] . '</span>';
              echo '<span class="lang-en">' . $career['brief']['en'] . '</span>';
              echo '</p>';
              #============ACHIVEMENTS==========
              echo '<ul>';
              foreach($career['achivements'] as $achivement)
              {
                echo '<li>';
                echo '<span class="lang-fa">' . $achivement['fa'] . '</span>';
                echo '<span class="lang-en">' . $achivement['en'] . '</span>';
                echo '</li>';
              }
              echo '</ul>';
              echo '</li>';
            }
            ?>
          </ol>
        </section>

        <section class="block">
          <h2>
            <span class="lang-fa">پروژه‌های منتخب</span>
            <span class="lang-en">Selected Projects</span>
          </h2>
          <div class="projects">
          <?php 
          foreach($data['projects'] as $project)
          {
            echo '<article class="project">';

            echo '<h3>';

            echo '<span class="lang-fa">' . $project['title']['fa'] . '</span>';
            echo '<span class="lang-en">' . $project['title']['en'] . '</span>';

            echo '<span class="tech ltr" dir="ltr">';

            for($i = 0; $i < count($project['technologies']); $i++)
            {
              echo $project['technologies'][$i];

              if($i != count($project['technologies']) - 1)
              {
                echo ' · ';
              }
            }

            echo '</span>';

            echo '</h3>';

            echo '<p>';
            echo '<span class="lang-fa">' . $project['brief']['fa'] . '</span>';
            echo '<span class="lang-en">' . $project['brief']['en'] . '</span>';
            echo '</p>';

            echo '<p class="project-links">';

            foreach($project['links'] as $link)
            {
              echo '<a class="ltr" href="' . $link['url'] . '" target="_blank" rel="noopener noreferrer" dir="ltr">';
              echo $link['label'];
              echo '</a>';
            }

            echo '</p>';

            echo '</article>';
          }
          ?>
          </div>
        </section>

        <section class="block cv-only">
          <h2>
            <span class="lang-fa">متن‌باز و سخنرانی</span>
            <span class="lang-en">Open Source & Talks</span>
          </h2>
          <ul class="extra-list">
            <?php
              foreach($data['talks'] as $talk)
              {
                echo '<li>';

                echo '<strong class="ltr" dir="ltr">';
                echo $talk['title']['en'];
                echo '</strong>';

                echo ' — ';

                echo '<span class="lang-fa">';
                echo $talk['brief']['fa'];

                if($talk['year']['fa'])
                {
                  echo ' · ' . $talk['year']['fa'];
                }

                echo '</span>';

                echo '<span class="lang-en">';
                echo $talk['brief']['en'];

                if($talk['year']['en'])
                {
                  echo ' · ' . $talk['year']['en'];
                }

                echo '</span>';

                echo '</li>';
              }
            ?>
          </ul>
        </section>

        <section class="block">
          <h2>
            <span class="lang-fa">تحصیلات</span>
            <span class="lang-en">Education</span>
          </h2>
          <?php
            foreach($data['educations'] as $education)
            {
              echo '<article class="edu">';

              echo '<div>';

              echo '<h3>';
              echo '<span class="lang-fa">' . $education['field']['fa'] . '</span>';
              echo '<span class="lang-en">' . $education['field']['en'] . '</span>';
              echo '</h3>';

              echo '<p>';
              echo '<span class="lang-fa">' . $education['academy']['fa'] . '</span>';
              echo '<span class="lang-en">' . $education['academy']['en'] . '</span>';
              echo '</p>';

              echo '</div>';

              echo '<time datetime="' . $education['years']['start']['en'] . '/' . $education['years']['end']['en'] . '">';

              echo '<span class="lang-fa">';
              echo $education['years']['start']['fa'] . ' — ' . $education['years']['end']['fa'];
              echo '</span>';

              echo '<span class="lang-en">';
              echo $education['years']['start']['en'] . ' — ' . $education['years']['end']['en'];
              echo '</span>';

              echo '</time>';

              echo '</article>';
            }
          ?>
        </section>
      </main>
    </div>

    <script src="./assets/app.js"></script>
  </body>
</html>