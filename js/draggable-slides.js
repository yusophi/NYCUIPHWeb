const container = document.querySelector(".Interview-container");
const cards = document.querySelector(".cards");

let cards_margin = 0;
function animate(){
  const container_rect = container.getBoundingClientRect();
  const cards_rect = cards.getBoundingClientRect();
  var margin = cards_margin;
  int = setInterval(function() {
    const Xextra = cards_rect.right - container_rect.right;
    margin = (margin > Xextra ?  Xextra : margin + 1);
    cards_margin = margin;
    cards.style.marginLeft = -margin + "px";
  },
  1000 / 15)
}

animate();

container.addEventListener("mouseleave", () =>{
  animate();
});

container.addEventListener("mouseover", () =>{
  clearInterval(int);
  cards.style.marginLeft = -cards_margin + "px";
});

/* keep track of user's mouse down and up */
let isPressedDown = false;
/* x horizontal space of cursor from inner container */
let cursorXSpace;

container.addEventListener("mousedown", (e) => {
  /*the 'e' means event*/
  isPressedDown = true;
  cursorXSpace = e.offsetX - cards.offsetLeft; 
  container.style.cursor = "grabbing";
});

container.addEventListener("mouseup", () => {
  container.style.cursor = "grab";
});

window.addEventListener("mouseup", () => {
  isPressedDown = false;
});


container.addEventListener("mousemove", (e) => {
  if (!isPressedDown) return;
  e.preventDefault();
  cards.style.left = `${e.offsetX - cursorXSpace}px`;
  boundCards();
});

function boundCards() {
  const container_rect = container.getBoundingClientRect();
  const cards_rect = cards.getBoundingClientRect();

  if (parseInt(cards.style.left) > 0) {
    cards.style.left = 0;
  } else if (cards_rect.right < container_rect.right) {
    cards.style.left = `-${cards_rect.width - container_rect.width}px`;
  }
}



//cards.addEvenetListener("mouseenter",animation_reset);