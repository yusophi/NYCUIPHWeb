function on(n) {
    if(n == 1)
    {
        document.getElementById("overlay1").style.display = "block";
        document.getElementById("main-nav").style.display = "none";
    }
    else if (n == 2)
    {
        document.getElementById("overlay2").style.display = "block";
        document.getElementById("main-nav").style.display = "none";
    }
}
  
function off(n) {

    /*document.getElementById("overlay").style.display = "none";*/
    if(n == 1)
    {
        document.getElementById("overlay1").style.display = "none";
        document.getElementById("main-nav").style.display = "block";
    }
    else if (n == 2)
    {
        document.getElementById("overlay2").style.display = "none";
        document.getElementById("main-nav").style.display = "block";
    }
}


const watchmore_1 = document.getElementById("hp-watchmore-1");
const watchmore_2 = document.getElementById("hp-watchmore-2");
const overlay1 = document.getElementById("overlay1");
const overlay2 = document.getElementById("overlay2");
const clsbtn = document.getElementsByClassName('closebtn');

watchmore_1.addEventListener("click", function(){on(1);});
overlay1.addEventListener("click", function(){off(1);});

watchmore_2.addEventListener("click", function(){on(2);});
overlay2.addEventListener("click", function(){off(2);});

for (var i = 0 ; i < clsbtn.length ; i++){
    clsbtn[i].addEventListener("click",function(){
        overlay1.style.display = "none";
        overlay2.style.display = "none";
        document.getElementById("main-nav").style.display = "block";
    });
}

const availableVideos= document.getElementsByClassName("overlay");
window.addEventListener("scroll", function (){
    for (var i = 0; i < availableVideos.length; i++) {
        availableVideos[i].style.display = "none";
    }
    document.getElementById("main-nav").style.display = "block";
})