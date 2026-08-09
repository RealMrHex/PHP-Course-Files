document.addEventListener("DOMContentLoaded", () => {
  const root = document.documentElement;
  const themeBtn = document.getElementById("theme-btn");
  const printBtn = document.getElementById("print-btn");
  const langBtn = document.getElementById("lang-btn");
  const docBtn = document.getElementById("doc-btn");
  const page = root.getAttribute("data-page") === "letter" ? "letter" : "cv";

  const keys = {
    theme: "cv-theme",
    lang: "cv-lang",
    doc: "cv-doc",
  };

  const applyTheme = (theme) => {
    const next = theme === "dark" ? "dark" : "light";
    root.setAttribute("data-theme", next);
    localStorage.setItem(keys.theme, next);

    if (themeBtn) {
      const isDark = next === "dark";
      const isEn = root.getAttribute("data-lang") === "en";
      const label = isDark
        ? isEn
          ? "Light mode"
          : "حالت روشن"
        : isEn
          ? "Dark mode"
          : "حالت تاریک";

      themeBtn.setAttribute("aria-pressed", String(isDark));
      themeBtn.setAttribute("aria-label", label);
      themeBtn.title = label;
    }
  };

  const applyLang = (lang) => {
    const next = lang === "en" ? "en" : "fa";
    root.setAttribute("data-lang", next);
    root.setAttribute("lang", next === "en" ? "en" : "fa");
    root.setAttribute("dir", next === "en" ? "ltr" : "rtl");
    localStorage.setItem(keys.lang, next);

    const name = next === "en" ? "Armin Houshmand" : "آرمین هوشمند";

    if (page === "letter") {
      document.title =
        next === "en" ? `Cover Letter — ${name}` : `نامه همراه — ${name}`;
    } else {
      const doc = root.getAttribute("data-doc") === "resume" ? "Resume" : "CV";
      document.title = `${doc} — ${name}`;
    }

    if (langBtn) {
      langBtn.setAttribute(
        "aria-label",
        next === "en" ? "Switch to Farsi" : "Switch to English"
      );
      langBtn.title = next === "en" ? "فارسی" : "English";
    }

    applyTheme(root.getAttribute("data-theme"));
  };

  const applyDoc = (doc) => {
    const next = doc === "resume" ? "resume" : "cv";
    root.setAttribute("data-doc", next);
    localStorage.setItem(keys.doc, next);

    if (docBtn) {
      const isResume = next === "resume";
      docBtn.setAttribute("aria-pressed", String(isResume));
      docBtn.setAttribute(
        "aria-label",
        isResume ? "Switch to CV" : "Switch to Resume"
      );
      docBtn.title = isResume ? "CV" : "Resume";
    }

    applyLang(root.getAttribute("data-lang"));
  };

  applyTheme(root.getAttribute("data-theme") || localStorage.getItem(keys.theme) || "light");
  applyLang(root.getAttribute("data-lang") || localStorage.getItem(keys.lang) || "fa");

  if (page !== "letter") {
    applyDoc(root.getAttribute("data-doc") || localStorage.getItem(keys.doc) || "cv");
  }

  themeBtn?.addEventListener("click", () => {
    const isDark = root.getAttribute("data-theme") === "dark";
    applyTheme(isDark ? "light" : "dark");
  });

  langBtn?.addEventListener("click", () => {
    const isEn = root.getAttribute("data-lang") === "en";
    applyLang(isEn ? "fa" : "en");
  });

  docBtn?.addEventListener("click", () => {
    const isResume = root.getAttribute("data-doc") === "resume";
    applyDoc(isResume ? "cv" : "resume");
  });

  printBtn?.addEventListener("click", () => {
    window.print();
  });
});
