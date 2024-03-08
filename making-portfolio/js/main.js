const menuBtn = document.querySelector(".menu-btn");
const berger = document.querySelector(".hamburger-btn");

menuBtn.addEventListener("click", () => {
  berger.classList.toggle("active");
});
