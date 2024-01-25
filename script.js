/* // add class navbarDark on navbar scroll
let header = document.querySelector(".navbar");

window.onscroll = function () {
  let top = window.scrollY;
  if (top >= 100) {
    header.classList.add("navbarDark");
  } else {
    header.classList.remove("navbarDark");
  }
};
 */
/* $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
  });
});
 */
let colore = document.querySelector(".myButton");

/* function mouseOver() {
  color.style.background = "white";
}
function mouseOut() {
  color.style.background = "black";
} */

/* document.addEventListener("click", myFunction);

function myFunction() {
  color.style.background = "white";
}
 */

colore.addEventListener(
  "mouseenter",
  function (event) {
    event.target.style.color = "Red";
  },
  false
);
colore.addEventListener(
  "mouseleave",
  function (event) {
    event.target.style.color = "";
  },
  false
);
