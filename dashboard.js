const preloader = document.querySelector(".preloader");

window.addEventListener("load", () => {
  preloader.style.display = "none";
});
const btn = document.querySelector("#btn");
btn.addEventListener("click", () => {
  if (!btn.classList.contains("slider")) {
    btn.classList.add("slider");
    document.body.style.background = "#000";
    document.body.style.color = "#fff";
  } else {
    btn.classList.remove("slider");
    document.body.style.background = "#fff";
    document.body.style.color = "#000";
  }
});
