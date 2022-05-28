var links_category_items = document.getElementsByClassName(
    "links-category-item"
);

var links_upper_items = document.getElementsByClassName(
    "links-upper-item"
);



for (var i = 0; i < links_upper_items.length; i++) {
    links_upper_items[i].addEventListener("click", function () {
        var toExpand = true;
        if (this.parentElement.classList.contains("expanded")) toExpand = false;
        for (var j = 0; j < links_category_items.length; j++) {
            links_category_items[j].classList.remove("expanded");
        }
        if (toExpand) this.parentElement.classList.add('expanded');

    });
}