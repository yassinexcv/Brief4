let btns = document.querySelectorAll(".voirt");
let modals = document.querySelectorAll(".voir-prod");
let closes = document.querySelectorAll(".fa-2x ");

// console.log(btns);
// console.log(modals);
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", () => {
    modals[i].style.opacity = "1";
    modals[i].style.zIndex = "999";
  });
  closes[i].addEventListener("click", () => {
    modals[i].style.opacity = "0";
    modals[i].style.zIndex = "-10";
  });
}