const drawer = document.querySelector(".drawer");
const btn = document.querySelectorAll(".drawer-btn");

btn.forEach((el) => {
  el.addEventListener("click", () => {
    drawer.classList.toggle("-translate-x-300");
    drawer.classList.toggle("lg:-translate-x-100");
  });
});
