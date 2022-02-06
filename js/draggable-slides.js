const container = document.querySelector(".Interview-container");
const cards = document.querySelector(".cards");

let cards_margin = 0;
let isAnimate = false;
let movelen = 0;
function animate(){
  int = setInterval(function() {
    cards_margin++;
    cards.style.left = -cards_margin + "px";
    boundCards();
  },
  1000 / 15)
}

animate();

container.addEventListener("mouseleave", () =>{
  isAnimate = true;
  animate();
});

container.addEventListener("mouseover", () =>{
  isAnimate = false;
  clearInterval(int);
  //cards.style.left = -cards_margin + "px";
});

/* keep track of user's mouse down and up */
let isPressedDown = false;
/* x horizontal space of cursor from inner container */
let cursorXSpace;

container.addEventListener("mousedown", (e) => {
  /*the 'e' means event*/
  /*按下 mouse*/
  isPressedDown = true;
  cursorXSpace = e.offsetX - cards.offsetLeft; 
  container.style.cursor = "grabbing";
});

container.addEventListener("mouseup", () => {
  /*放開 mouse*/
  container.style.cursor = "grab";
  
});

window.addEventListener("mouseup", () => {
  isPressedDown = false;
});

container.addEventListener("mousemove", (e) => {
  if (!isPressedDown) return;
  e.preventDefault();
  cards.style.left = `${e.offsetX - cursorXSpace}px`;
  cards_margin = -(e.offsetX - cursorXSpace);
  boundCards();
});

function boundCards() {
  const container_rect = container.getBoundingClientRect();
  const cards_rect = cards.getBoundingClientRect();
  
  if (parseInt(cards.style.left) > 0){
    cards.style.left = 0;
    cards_margin = 0;
  } 
  else if (cards_rect.right < container_rect.right) {
    if(isAnimate) {
      isAnimate = false;
      clearInterval(int);
    }
    cards.style.left = `-${cards_rect.width - container_rect.width}px`;
    cards_margin = cards_rect.width - container_rect.width;
  }
}
