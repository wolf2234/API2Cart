document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelector("a[data-block-link]")
        .addEventListener("click", function (e) {
            e.preventDefault();
        });
});
