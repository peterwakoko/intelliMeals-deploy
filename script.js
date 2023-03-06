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
