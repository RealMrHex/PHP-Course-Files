<div class="toolbar" aria-label="Toolbar">
    <?php if($_SERVER['REQUEST_URI'] === '/cv/') { ?>
      <button type="button" id="doc-btn" class="chip-btn" aria-label="CV / Resume" title="CV / Resume">
        <span class="doc-cv">CV</span>
        <span class="doc-resume">
          <span class="lang-fa">رزومه</span>
          <span class="lang-en">Resume</span>
        </span>
      </button>

      <a class="chip-btn" href="./cover-letter" title="Cover Letter">
        <span class="lang-fa">نامه</span>
        <span class="lang-en">Letter</span>
      </a>
    <?php } ?>

    <?php if($_SERVER['REQUEST_URI'] === '/cv/cover-letter/') { ?>
      <a class="chip-btn" href="../" title="CV / Resume">
        <span class="lang-fa">رزومه</span>
        <span class="lang-en">Resume</span>
      </a>
    <?php } ?>

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
