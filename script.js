const wrapTable = document.getElementById("wrap-table");
const btnOpenNewUser = document.getElementById("btn-open-new-user-form");
let stepName = false;
let stepSurname = false;
let stepAge = false;
let stepMail = false;
let getTheId;

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


generateTable();
function generateTable(){
  fetch("./php/read.php").then(res=>res.json())
  .then(data=>{
    if(data.response == "empty"){
      wrapTable.innerHTML = `
        <div class='row d-flex justify-content-center my-5'>
          <div class='col-6 text-center'>
            <div class="alert alert-dark" role="alert">
              ${data.message}
            </div>
          </div>
        </div>
      ` 
      return;
    };
    let table = `
      <div class='row d-flex justify-content-center text-center'>
        <div class='col-lg-8'>
          <table class='table table-striped table-hover table-light'>
            <thead>
              <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>AGE</th>
                <th>MAIL</th>
              </tr>
            </thead>
            <tbody>
              ${createRows(data)}
            </tbody>
          </table>
        </div>
      </div>
    `;
    wrapTable.innerHTML = table;  
  })
}

function createRows(people){
  let rows = '';
  person.foreach(person=>{
    let row = `
      <tr>
        <td>${person.id}</td>
        <td>${person.name}</td>
        <td>${person.surname}</td>
        <td>${person.age}</td>
        <td>${person.mail}</td>
        <td>
          <button data-delete='${person.id}' class='btn btn-sm btn-danger btn-delete'>
            <i class='fas fa-trash'></i>
          </button>
          <button data-update='${person.id}' class='btn btn-sm btn-success btn-update'>
            <i class='fas fa-pen'></i>
          </button>
        </td>
      </tr>
    `;
    rows += row;
  })

  return rows;
}

btnSubmitNewForm.addEventListener("click",()=>{
  checkValidations(newName,newSurname,newAge,newMail,errNewName,errNewSurname,errNewAge,errNewMail);
  console.log('ok');
})

function checkValidations(name,surname,age,mail,errName,errSurname,errAge,errMail,typeFetch//++++++) {
  checkName(name,errName);
  checkSurname(surname,errSurname);
  checkAge(age,errAge);
  checkMail(mail,errMail);

  if(stepName == true &&
    stepSurname == true &&
    stepAge == true &&
    stepMail == true){
      if(//teyy++)
    }
}

function checkName(name,errName) {
  if(name.value.length < 4){
    stepName = false;
    errName.style.display = "block";
    errName.innerHTML = 'Name field must be at least 4 chars long';
    name.className = "form-control is-invalid";
  }else {
    stepName = true;
    errName.style.display = "none";
    errName.innerHTML = "";
    name.className = "form-control is-valid"
  }
}

function checkSurname(surname,errSurname) {
  if(surname.value.length < 4){
    stepSurname = false;
    errSurname.style.display = "block";
    errSurname.innerHTML = 'Surname field must be at least 4 chars long';
    surname.className = "form-control is-invalid"
  }else {
    stepSurname = true;
    errSurname.style.display = "none";
    errSurname.innerHTML = "";
    surname.className = "form-control is-valid"
  }
}

function checkAge(age,errAge) {

  if(age.value < 18){
    stepAge = false;
    errAge.style.display = "block";
    errAge.innerHTML = "The User must have at least 18 years old";
    age.className = "form-control is-invalid";
  }else if(age.value > 99){
    stepAge = false;
    errAge.style.display = "block";
    errAge.innerHTML = "The most age allow is 99 years old";
    age.className = "form-control is-invalid";
  }else {
    stepAge = true;
    errAge.style.display = "";
    errAge.innerHTML = "";
    age.className = "form-control is-valid";
  }

}

function checkMail(mail,errMail) {

  test = /@/;

  if(mail.value.length < 8){
    stepMail = false;
    errMail.style.display = "block";
    errMail.innerHTML = "Mail field must be at least 8 chars long";
    mail.className = "form-control is-invalid";
  }else if(!mail.value.match(test)){
    stepMail = false;
    errMail.style.display = "block";
    errMail.innerHTML = "The mail field miss the char: '@'";
    mail.className = "form-control is-invalid";
  }else {
    stepMail= true;
    errMail.style.display = "none";
    errMail.innerHTML ="";
    mail.className = "form-control is-valid";
  }

}

btnResetFormNew.addEventListener('click',()=>{
  resetForm(newName,newSurname,newAge,newMail,errNewName,errNewSurname,errNewAge,errNewMail);
});
btnUpdateResetForm.addEventListener('click',resetForm);
function resetForm(name,surname,age,mail,errName,errSurname,errAge,errMail){
  name.className = "form-control";
  name.value = "";
  surname.className = "form-control";
  surname.value = "";
  age.className = "form-control";
  age.value = "";
  mail.className = "form-control";
  mail.value = "";
  errName.innerHTML = "";
  errSurname.innerHTML = "";
  errAge.innerHTML = "";
  errMail.innerHTML = "";

  stepName = false;
  stepSurname = false;
  stepAge = false;
  stepMail = false;
  
}


function sendDataToServer(url,name,surname,age,mail,type){


  if(type)


  let formData = new FormData;
  formData.append("name",name.value);
  formData.append("surname",surname.value);
  formData.append("age",age.value);
  formData.append("mail",mail.value);

  fetch(url,{
    method:"POST",
    header:{'Content-Type':'application/json'},
    body:formData
  }).then(res=>res.json())
  .then(data =>{
    console.log(data);
  })
}