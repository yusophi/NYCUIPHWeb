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
