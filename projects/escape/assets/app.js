/**
 * اتاق فرار PHP – فقط تعاملات فرانت‌اند
 * امتیاز، تلاش، اعتبارسنجی پازل، سشن و ریدایرکت → بعداً با PHP
 */

document.querySelectorAll("[data-clue-button]").forEach(function (button) {
  button.addEventListener("click", function () {
    var card = button.closest("[data-object-card]");
    var clue = card.querySelector(".clue");
    var willOpen = clue.hidden;

    clue.hidden = !willOpen;
    card.classList.toggle("is-open", willOpen);
    button.setAttribute("aria-expanded", String(willOpen));
  });
});

// فیدبک دمو برای پیش‌نمایش استاتیک.
// وقتی PHP فرم را هندل کرد، این preventDefault را بردارید.
var startForm = document.querySelector("[data-start-form]");
if (startForm) {
  startForm.addEventListener("submit", function (event) {
    // اجازه ناوبری به room.html برای پیش‌نمایش فرانت
    var nameInput = startForm.querySelector("#player-name");
    var message = document.querySelector("[data-form-message]");
    if (message && nameInput && nameInput.value.trim()) {
      message.textContent =
        "نام مستعار ثبت شد. از این‌جا، PHP پرونده را باز می‌کند…";
      message.hidden = false;
    }
  });
}

var answerForm = document.querySelector(".answer-form");
if (answerForm) {
  answerForm.addEventListener("submit", function (event) {
    event.preventDefault();
    var message = document.querySelector("[data-answer-message]");
    if (message) {
      message.textContent =
        "مدرک ضمیمه شد. قاضیِ واقعی بعداً با PHP رأی می‌دهد.";
      message.hidden = false;
    }
  });
}
