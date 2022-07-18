const back_to_top_btn = document.getElementById("back_to_top_btn");

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

back_to_top_btn.addEventListener("click",topFunction);