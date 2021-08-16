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
