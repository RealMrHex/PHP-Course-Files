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

var startForm = document.querySelector("[data-start-form]");
if (startForm) {
  startForm.addEventListener("submit", function (event) {
    var nameInput = startForm.querySelector("#player-name");
    var message = document.querySelector("[data-form-message]");
    if (message && nameInput && nameInput.value.trim()) {
      message.textContent =
        "نام مستعار ثبت شد. از این‌جا، PHP پرونده را باز می‌کند…";
      message.hidden = false;
    }
  });
}