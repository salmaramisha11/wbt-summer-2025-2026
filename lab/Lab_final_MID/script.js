const form = document.getElementById("myForm");

let wrongAttempt = 0;
let locked = false;

form.addEventListener("submit", function(event){

    event.preventDefault();

    clearErrors();

    if(locked){
        document.getElementById("passwordError").innerHTML =
        "Password Locked! Try after 1 minute.";
        return;
    }

    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let category = document.getElementById("category");
    let reason = document.getElementById("reason");
    let gender = document.querySelector('input[name="gender"]:checked');
    let clubs = document.querySelectorAll('input[name="club"]:checked');

    let valid = true;


    if(fname.value.trim()==""){
        showError(fname,"fnameError","First Name is required");
        valid=false;
    }
    else if(!/^[A-Za-z]+$/.test(fname.value)){
        showError(fname,"fnameError","Letters only");
        valid=false;
    }
    else{
        showSuccess(fname);
    }


    if(lname.value.trim()==""){
        showError(lname,"lnameError","Last Name is required");
        valid=false;
    }
    else if(!/^[A-Za-z]+$/.test(lname.value)){
        showError(lname,"lnameError","Letters only");
        valid=false;
    }
    else{
        showSuccess(lname);
    }

    
    if(email.value.trim()==""){
        showError(email,"emailError","Email is required");
        valid=false;
    }
    else if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)){
        showError(email,"emailError","Invalid Email");
        valid=false;
    }
    else{
        showSuccess(email);
    }

    //pass
    if(password.value==""){
        showError(password,"passwordError","Password is required");
        valid=false;
    }

    else if(password.value!="AIUBCLUB"){

        wrongAttempt++;

        showError(password,"passwordError","Wrong Password! Attempt "+wrongAttempt+" of 3");

        valid=false;

        if(wrongAttempt>=3){

            locked=true;

            password.disabled=true;

            document.getElementById("passwordError").innerHTML=
            "Too many attempts. Locked for 1 minute.";

            setTimeout(function(){

                locked=false;
                wrongAttempt=0;
                password.disabled=false;

                document.getElementById("passwordError").innerHTML=
                "Password Unlocked.";

            },60000);

        }

    }

    else{

        wrongAttempt=0;
        showSuccess(password);

    }


    if(gender==null){

        document.getElementById("genderError").innerHTML=
        "Select Gender";

        valid=false;

    }

    
    if(clubs.length==0){

        document.getElementById("clubError").innerHTML=
        "Select at least one Club";

        valid=false;

    }


    if(category.value==""){

        showError(category,"categoryError","Select Category");

        valid=false;

    }

    else{

        showSuccess(category);

    }

    
    if(reason.value.trim()==""){

        showError(reason,"reasonError","Reason is required");

        valid=false;

    }

    else if(reason.value.trim().length<20){

        showError(reason,"reasonError","Minimum 20 characters");

        valid=false;

    }

    else{

        showSuccess(reason);

    }

    if(valid){

        alert("Registration Successful!");

        form.reset();

        clearErrors();

    }

});


function showError(input,errorId,message){

    input.classList.add("errorBorder");
    input.classList.remove("successBorder");

    document.getElementById(errorId).innerHTML=message;

}


function showSuccess(input){

    input.classList.remove("errorBorder");
    input.classList.add("successBorder");

}


function clearErrors(){

    let errors=document.querySelectorAll(".error");

    errors.forEach(function(item){

        item.innerHTML="";

    });

    let fields=document.querySelectorAll("input,select,textarea");

    fields.forEach(function(field){

        field.classList.remove("errorBorder");
        field.classList.remove("successBorder");

    });

}