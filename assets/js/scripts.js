document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelector("a[data-block-link]")
        .addEventListener("click", function (e) {
            e.preventDefault();
        });

    document
        .querySelector(".scroll-top")
        .addEventListener("click", function (e) {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
});
