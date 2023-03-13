const btnOpenNewUser = document.getElementById("btn-open-new-user-form");
let stepName = false;
let stepSurname = false;
let stepAge = false;
let stepMail = false;

//FORM NEW USER DOM ELEMENTS START
const wrapNewUserForm = document.getElementById("wrap-form-new-user");
const errNewName = document.getElementById("errName-new");
const newName = document.getElementById("new-name");
const errNewSurname = document.getElementById("errSurname-new");
const newSurname = document.getElementById("new-surname");
const errNewAge = document.getElementById("errAge-new");
const newAge = document.getElementById("new-age");
const errNewMail = document.getElementById("errMail-new");
const newMail = document.getElementById("new-mail");
const btnResetFormNew = document.getElementById("btn-new-reset");
const btnSubmitNewForm = document.getElementById("btn-new-submit");
const wrapMsgServerFormNewUser = document.getElementById(
  "wrap-errors-new-msg-by-server"
);
//END ELEMENTS OF THE DOM NEW FORM

//START ELEMENTS OF THE DOM UPDATE FORM USER
const wrapUpdateUserForm = document.getElementById("wrap-form-update-user");
const infoUser = document.getElementById("user");
const errUpdateName = document.getElementById("errName-update");
const updateName = document.getElementById("update-name");
const errUpdateSurname = document.getElementById("errSurname-update");
const updateSurname = document.getElementById("update-surname");
const errUpdateAge = document.getElementById("errAge-update");
const updateAge = document.getElementById("update-age");
const errUpdateMail = document.getElementById("errMail-update");
const updateMail = document.getElementById("update-mail");
const btnUpdateResetForm = document.getElementById("btn-update-reset");
const btnUpdateSubmitForm = document.getElementById("btn-update-submit");
const wrapMsgServerFormUpdateUser = document.getElementById(
  "wrap-errors-update-msg-by-server"
);
//END ELEMENTS OF THE DOM UPDATE FORM USER

btnOpenNewUser.addEventListener("click", openNewUserForm);
function openNewUserForm() {
  wrapNewUserForm.style.display = "";
  wrapUpdateUserForm.style.display = "none";
}

function checkValidations() {}

function checkName() {}

function checkSurname() {}

function checkAge() {}

function checkMail() {}
