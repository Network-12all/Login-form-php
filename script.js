document.addEventListener("DOMContentLoaded", function () {
  const loginToggle = document.getElementById("loginToggle");
  const signupToggle = document.getElementById("signupToggle");
  const loginForm = document.getElementById("loginForm");
  const signupForm = document.getElementById("signupForm");

  loginToggle.addEventListener("click", function () {
    loginForm.style.display = "block";
    signupForm.style.display = "none";
  });

  signupToggle.addEventListener("click", function () {
    signupForm.style.display = "block";
    loginForm.style.display = "none";
  });
});
