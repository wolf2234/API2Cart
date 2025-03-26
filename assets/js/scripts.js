let menuItems = document.querySelectorAll(".pure-menu-item");
menuItems.forEach((menuItem) => {
    if (menuItem.querySelector(".dropdown")) {
        let item = menuItem.querySelector(".menu-item");
        let tringleImg = document.createElement("img");
        tringleImg.setAttribute(
            "src",
            "wp-content/themes/api2cart/assets/img/triangle_arrow.png"
        );
        tringleImg.setAttribute("alt", "Triangle");
        item.appendChild(tringleImg);
    }
});
