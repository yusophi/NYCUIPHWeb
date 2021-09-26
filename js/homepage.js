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


/*this is for the overlay block*/

function on(n) {
    /*if(n == 1)
    {
        var vedio1 = document.getElementsByClassName("overlay1");
        vedio1.className = vedio1.className.replace("activevideo"," ");
        document.getElementsByClassName("activevideo").style.display = "block";
    }
    if(n == 2)
    {
        document.getElementsByClassName("overlay2").style.display = "block";
    }*/
    if(n == 1)
    {
        document.getElementById("overlay1").style.display = "block";
        /*document.getElementById("main-nav").style.backgroundColor = "block";*/


    }
    else if (n == 2)
    {
        document.getElementById("overlay2").style.display = "block";
    }

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
}
