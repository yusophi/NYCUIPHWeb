// Jenny: slide show block
var imagesIndex = 1;
displayImage(imagesIndex);

function currentImage(n){
    imagesIndex =n;
    displayImage(imagesIndex);
}

function plusImage(n){
    imagesIndex = imagesIndex+n;
    displayImage(imagesIndex);
}

function displayImage(n){
    var availableImages = document.getElementsByClassName("imagesSlide");
    var allDots = document.getElementsByClassName("dot");
    if( n > availableImages.length) { imagesIndex = 1; }
    if( n < 1) { imagesIndex = availableImages.length; }
    for(var i=0; i<availableImages.length; i++){
        availableImages[i].style.display = "none";
    }

    for(var i=0;i<allDots.length;i++){
        allDots[i].className = allDots[i].className.replace("active"," ");
    }
    availableImages[imagesIndex-1].style.display="block";
    allDots[imagesIndex-1].className +=" active";
}


// Milo: JS code for event part

FlexSlider = {
    num_items: document.querySelectorAll(".event-data-item").length,

    items: document.querySelectorAll(".event-data-item"),

    current: 1,

    next: true,

    next_number: function (number) {
        number++;
        return number > this.num_items ? 1 : number;
    },

    prev_number(number) {
        number--;
        return number < 1 ? this.num_items : number;
    },

    init: function () {
        FlexSlider.display(this.num_items, this.items, this.current);
        this.addEvents();
    },

    display: function (num_items, items, current) {
        document
            .querySelectorAll(".event-slider-item")
            .forEach(function (element, index) {
                let number = current;
                switch (index) {
                    case 0:
                        number--;
                        number = number < 1 ? num_items : number;
                        number--;
                        number = number < 1 ? num_items : number;
                        element.innerHTML = items[number - 1].innerHTML;
                        break;
                    case 1:
                        number--;
                        number = number < 1 ? num_items : number;
                        element.innerHTML = items[number - 1].innerHTML;
                        break;
                    case 2:
                        element.innerHTML = items[number - 1].innerHTML;
                        break;
                    case 3:
                        number++;
                        number = number > num_items ? 1 : number;
                        element.innerHTML = items[number - 1].innerHTML;
                        break;
                    case 4:
                        number++;
                        number = number > num_items ? 1 : number;
                        number++;
                        number = number > num_items ? 1 : number;
                        element.innerHTML = items[number - 1].innerHTML;
                        break;
                }
            });
    },

    addEvents: function () {
        document
            .querySelector("#event-icon-next")
            .addEventListener("click", () => {
                this.gotoNext();
            });

        document
            .querySelector("#event-icon-prev")
            .addEventListener("click", () => {
                this.gotoPrev();
            });

        document
            .querySelector("#event-slider-container")
            .addEventListener("transitionend", () => {
                this.changeContent();
            });
    },

    gotoNext: function () {
        this.next = true;
        document
            .querySelector("#event-slider-container")
            .classList.add("event-slider-container-transition");
        document.querySelector("#event-slider-container").style.transform =
            "translateX(-44.11%)";
        document
            .querySelector(".main-event .single-event")
            .classList.add("event-to-smaller");
        document
            .querySelector(".next-event .single-event")
            .classList.add("event-to-bigger");
        document
            .querySelector(".main-event .single-event .event-mask")
            .classList.add("event-to-darker");
        document
            .querySelector(".next-event .single-event .event-mask")
            .classList.add("event-to-brighter");
        document.querySelector(
            "#event-icon-prev"
        ).previousElementSibling.style.zIndex = 10;
        document.querySelector(
            "#event-icon-next"
        ).previousElementSibling.previousElementSibling.style.zIndex = 10;
        this.current++;
        this.current = this.current > this.num_items ? 1 : this.current;
    },

    gotoPrev: function () {
        this.next = false;
        document
            .querySelector("#event-slider-container")
            .classList.add("event-slider-container-transition");
        document.querySelector("#event-slider-container").style.transform =
            "translateX(44.11%)";
        document
            .querySelector(".main-event .single-event")
            .classList.add("event-to-smaller");
        document
            .querySelector(".prev-event .single-event")
            .classList.add("event-to-bigger");
        document
            .querySelector(".main-event .single-event .event-mask")
            .classList.add("event-to-darker");
        document
            .querySelector(".prev-event .single-event .event-mask")
            .classList.add("event-to-brighter");
        document.querySelector(
            "#event-icon-prev"
        ).previousElementSibling.style.zIndex = 10;
        document.querySelector(
            "#event-icon-next"
        ).previousElementSibling.previousElementSibling.style.zIndex = 10;
        this.current--;
        this.current = this.current < 1 ? this.num_items : this.current;
    },

    changeContent: function () {
        FlexSlider.display(this.num_items, this.items, this.current);

        document
            .querySelector("#event-slider-container")
            .classList.remove("event-slider-container-transition");
        document.querySelector("#event-slider-container").style.transform =
            "translateX(0%)";

        document.querySelector(
            "#event-icon-prev"
        ).previousElementSibling.style.zIndex = 0;
        document.querySelector(
            "#event-icon-next"
        ).previousElementSibling.previousElementSibling.style.zIndex = 0;
    },
};

FlexSlider.init();

// Milo: End of event part

// Jenny: overlay in video block
/*this is for the overlay block*/
function on(n) {
    if(n == 1)
    {
        document.getElementById("overlay1").style.display = "block";
        /*document.getElementById("main-nav").style.backgroundColor = "block";*/


    }
    else if (n == 2)
    {
        document.getElementById("overlay2").style.display = "block";
    }
    /*else if (n == 3)
    {
        document.getElementById("profile_overlay1").style.display = "block";
        document.getElementById("main-nav").style.display = "none";

    }
    else if (n == 4)
    {
        document.getElementById("profile_overlay2").style.display = "block";
        document.getElementById("main-nav").style.display = "none";

    }*/
}
  
function off(n) {

    /*document.getElementById("overlay").style.display = "none";*/
    if(n == 1)
    {
        document.getElementById("overlay1").style.display = "none";

    }
    else if (n == 2)
    {
        document.getElementById("overlay2").style.display = "none";
    }
    /*else if (n == 3)
    {
        document.getElementById("profile_overlay1").style.display = "none";
        document.getElementById("main-nav").style.display = "block";
    }
    else if (n == 4)
    {
        document.getElementById("profile_overlay2").style.display = "none";
        document.getElementById("main-nav").style.display = "block";

    }else if (n == 5)
    {
        document.getElementById("profile_overlay3").style.display = "none";
        document.getElementById("main-nav").style.display = "block";
    }*/
}
// end of overaly


// Milo: JS code for links part

var links_category_items = document.getElementsByClassName(
    "links-category-item"
);

var links_upper_items = document.getElementsByClassName(
    "links-upper-item"
);

var Links_container = document.getElementsByClassName('Links-container');

for (var i = 0; i < links_upper_items.length; i++) {
    console.log("adding events");
    links_upper_items[i].addEventListener("click", function () {
        console.log("running")
        var toExpand = true;
        if (this.parentElement.classList.contains("expanded")) toExpand = false;
        for (var j = 0; j < links_category_items.length; j++) {
            links_category_items[j].classList.remove("expanded");
        }
        if (toExpand) this.parentElement.classList.add('expanded');
        Links_container[0].classList.toggle('expanded', toExpand);
    });
}

// Milo: End of links part


/* Jenny: contactUs block js*/
var ProfileIndex = 1;
function currentProfile(n){
    ProfileIndex = n;
    displayProfile(ProfileIndex);
}

function plusProfile(n){
    ProfileIndex = ProfileIndex+n;
    displayProfile(ProfileIndex);
}

function displayProfile(n){
    var availableProfiles = document.getElementsByClassName("overlayinContact");
    if( n > availableProfiles.length) { ProfileIndex = 1; }
    if( n < 1) { ProfileIndex = availableProfiles.length; }

    for(var i=0; i < availableProfiles.length; i++){
        availableProfiles[i].style.display = "none";
    }

    availableProfiles[ProfileIndex-1].style.display="block";
    document.getElementById("main-nav").style.display = "none";
    /*allDots[ProfileIndex-1].className +=" active";*/
}

function closeProfile(n){
    var availableProfiles = document.getElementsByClassName("overlayinContact");
    if( n > availableProfiles.length) { ProfileIndex = 1; }
    if( n < 1) { ProfileIndex = availableProfiles.length; }

    for(var i=0; i < availableProfiles.length; i++){
        availableProfiles[i].style.display = "none";
    }

    availableProfiles[ProfileIndex-1].style.display="none";
    document.getElementById("main-nav").style.display = "block";
    /*allDots[ProfileIndex-1].className +=" active";*/
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}