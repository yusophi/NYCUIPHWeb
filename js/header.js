var nav_disappearable = document.getElementsByClassName("nav-disappearable");
var logo = document.getElementById("logo");
var nav_menu = document.getElementById("nav-menu");
var nav_toolbar = document.getElementById("nav-toolbar");
var main_nav = document.getElementById("main-nav");
var nav_menu = document.getElementById("nav-menu");
var nav_dropdown_block = document.getElementById("nav-dropdown-block");
var nav_main_list_item_1 = document.getElementById("nav-main-list-item-1");
var nav_main_list_item_2 = document.getElementById("nav-main-list-item-2");
var nav_main_list_item_3 = document.getElementById("nav-main-list-item-3");
var nav_main_list_item_4 = document.getElementById("nav-main-list-item-4");
var nav_main_list_item_5 = document.getElementById("nav-main-list-item-5");
var nav_main_list_item_6 = document.getElementById("nav-main-list-item-6");
var nav_main_list_item_7 = document.getElementById("nav-main-list-item-7");
var nav_main_list_item_8 = document.getElementById("nav-main-list-item-8");
var nav_main_list_item_9 = document.getElementById("nav-main-list-item-9");
var nav_list_item_1 = document.getElementsByClassName('nav-list-item-1');
var nav_list_item_2 = document.getElementsByClassName('nav-list-item-2');
var nav_list_item_3 = document.getElementsByClassName('nav-list-item-3');
var nav_list_item_4 = document.getElementsByClassName('nav-list-item-4');
var nav_list_item_5 = document.getElementsByClassName('nav-list-item-5');
var nav_list_item_6 = document.getElementsByClassName('nav-list-item-6');
var nav_list_item_7 = document.getElementsByClassName('nav-list-item-7');
var nav_list_item_8 = document.getElementsByClassName('nav-list-item-8');
var nav_list_item_9 = document.getElementsByClassName('nav-list-item-9');
var menu_lists = document.getElementsByClassName("menu-list");
var dropdown_menus = document.getElementsByClassName("dropdown-menu");



window.addEventListener("scroll", function () {
  nav_disappearable[0].classList.toggle("none-display", scrollY > 0);
  nav_disappearable[1].classList.toggle("none-display", scrollY > 0);
  main_nav.classList.toggle("nav-menu-pullup", scrollY > 0);
  logo.classList.toggle("stay", scrollY > 0);
  nav_toolbar.classList.toggle("pulldown", scrollY > 0);
  nav_menu.classList.toggle("shorten", scrollY > 0);
});


nav_menu.addEventListener("mouseleave", function() {
  for (var j = 0; j < dropdown_menus.length; j++) {
    dropdown_menus[j].style.display = "none";
  }
});


for (var i = 0; i < menu_lists.length; i++) {
  menu_lists[i].addEventListener("mouseenter", function () {
    for (var j = 0; j < dropdown_menus.length; j++) {
      dropdown_menus[j].style.display = "inline-block";
    }
  });
}


nav_main_list_item_1.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_1.length; i++) {
    nav_list_item_1[i].classList.add('visible');
  }
});

nav_main_list_item_1.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_1.length; i++) {
    nav_list_item_1[i].classList.remove('visible');
  }
});

nav_main_list_item_2.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_2.length; i++) {
    nav_list_item_2[i].classList.add('visible');
  }
});

nav_main_list_item_2.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_2.length; i++) {
    nav_list_item_2[i].classList.remove('visible');
  }
});

nav_main_list_item_3.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_3.length; i++) {
    nav_list_item_3[i].classList.add('visible');
  }
});

nav_main_list_item_3.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_3.length; i++) {
    nav_list_item_3[i].classList.remove('visible');
  }
});

nav_main_list_item_4.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_4.length; i++) {
    nav_list_item_4[i].classList.add('visible');
  }
});

nav_main_list_item_4.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_4.length; i++) {
    nav_list_item_4[i].classList.remove('visible');
  }
});

nav_main_list_item_5.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_5.length; i++) {
    nav_list_item_5[i].classList.add('visible');
  }
});

nav_main_list_item_5.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_5.length; i++) {
    nav_list_item_5[i].classList.remove('visible');
  }
});

nav_main_list_item_6.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_6.length; i++) {
    nav_list_item_6[i].classList.add('visible');
  }
});

nav_main_list_item_6.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_6.length; i++) {
    nav_list_item_6[i].classList.remove('visible');
  }
});

nav_main_list_item_7.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_7.length; i++) {
    nav_list_item_7[i].classList.add('visible');
  }
});

nav_main_list_item_7.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_7.length; i++) {
    nav_list_item_7[i].classList.remove('visible');
  }
});

nav_main_list_item_8.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_8.length; i++) {
    nav_list_item_8[i].classList.add('visible');
  }
});

nav_main_list_item_8.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_8.length; i++) {
    nav_list_item_8[i].classList.remove('visible');
  }
});

nav_main_list_item_9.addEventListener("mouseenter", function() {
  for(var i = 0; i < nav_list_item_9.length; i++) {
    nav_list_item_9[i].classList.add('visible');
  }
});

nav_main_list_item_9.addEventListener("mouseleave", function() {
  for(var i = 0; i < nav_list_item_9.length; i++) {
    nav_list_item_9[i].classList.remove('visible');
  }
});