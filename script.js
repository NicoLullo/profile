var nav = document.querySelector(".prova"); // Identify target

window.addEventListener("scroll", function (event) {
  // To listen for event
  event.preventDefault();

  if (window.scrollY <= 150) {
    // Just an example
    nav.style.backgroundColor = "White"; // or default color
  } else {
    nav.style.backgroundColor = "black";
  }
});

let write = document.querySelector(".myButton");

write.addEventListener(
  "mouseenter",
  function (event) {
    event.target.innerHTML = "Hello!!!";
  },
  false
);
write.addEventListener(
  "mouseleave",
  function (event) {
    event.target.innerHTML = "Nico Lullo";
  },
  false
);
