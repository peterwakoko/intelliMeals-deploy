console.log(window.matchMedia("(prefers-color-scheme: dark)").matches);

const preloader = document.querySelector(".preloader");

window.addEventListener("load", () => {
  preloader.style.display = "none";
});

// const btn = document.querySelector("#btn");
// btn.addEventListener("click", (e) => {
//   if (!btn.classList.contains("slider")) {
//     btn.classList.add("slider");
//     document.body.style.background = "#202124";
//     document.body.style.color = "#fff";
//     e.preventDefault();
//   } else {
//     btn.classList.remove("slider");
//     document.body.style.background = "#fff";
//     document.body.style.color = "#000";
//   }
// });

const profile_image = document.querySelector(".profile-image");
const profile_drop_down = document.querySelector(".profile-drop-down");
profile_image.addEventListener("click", () => {
  profile_drop_down.style.display = "block";
});

function darkmode() {
  const wasDarkmode = localStorage.getItem("darkmode") === "true";
  localStorage.setItem("darkmode", !wasDarkmode);
  const element = document.body;
  element.classList.toggle("dark-mode", !wasDarkmode);
}

function onload() {
  document.body.classList.toggle(
    "dark-mode",
    localStorage.getItem("darkmode") === "true"
  );
}
