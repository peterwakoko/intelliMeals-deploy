var user_name = document.getElementById("user_name");
var user_password = document.getElementById("user_password");
var login_btn = document.getElementById("login_btn");

function validateUserName() {
  var user_name_value = document.getElementById("user_name").value;

  if (user_name_value.length == 0) {
    user_name.style.border = "2px solid #2da44e";
    return false;
  } else {
    user_name.style.border = "2px solid #2da44e";
  }
}

function validateUserPassword() {
  var user_password_value = document.getElementById("user_password").value;
  if (user_password_value.length == 0) {
    login_btn.style.opacity = "0.7";
    return false;
  } else {
    user_password.style.border = "2px solid #2da44e";
    login_btn.style.opacity = "1";
  }
}

const toTop = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
});

const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLinks = document.getElementsByClassName("navbar-links")[0];

toggleButton.addEventListener("click", () => {
  navbarLinks.classList.toggle("active");
});
