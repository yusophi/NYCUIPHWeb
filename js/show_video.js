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