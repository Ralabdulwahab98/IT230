const fName = document.getElementById('first_name')
const fNameError = document.getElementById('firstNameError');
const lName = document.getElementById('last_name');
const lNameError = document.getElementById('lastNameError');
const userName = document.getElementById('username');
const userNameError = document.getElementById('userNameError');
const userEmail = document.getElementById('email');
const userEmailError = document.getElementById('userEmailError');
const passwd = document.getElementById('password');
const passwdError = document.getElementById('passwdError');
const passwdConfirmation = document.getElementById('password_confirmation');
const passwdConfirmationError = document.getElementById('passwdConfirmationError');
const signupForm = document.getElementById('form')

form.addEventListener("submit", (e) => {
  e.preventDefault();
  validateInputs();
});
