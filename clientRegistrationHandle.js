//Function For Validation
function validateForm(){

//Handle client Registration Form Validation
var uname=document.getElementById("uname").value;
var pass=document.getElementById("pass").value;
var cfpass=document.getElementById("cfpass").value;
var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var gender=document.getElementById("rad").value;
var phone=document.getElementById("phone").value;
var dob=document.getElementById("dob").value;
var address=document.getElementById("address").value;
var state=document.getElementById("state").value;
var para=document.getElementById("para");


//Pattern

var patternUname=/^[a-zA-Z-' ]*$/;
var patterName=/^[a-zA-Z-' ]*$/;
var patterGender=/^[a-zA-Z-' ]*$/;
var patternEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var patternDob=/^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/;




//Logical Checking Validation
if(uname == "" ||  pass == "" ||  cfpass == "" || name == "" ||email == "" || gender == "" || phone == "" || address == "" || state == ""){

    para.innerHTML="Please at First Fill Up The Form"
    return false;

}else{
    if(patternUname.test(uname) == true){

        if(patternName.test(name) == true){

            if(patternGender.test(gender) == true){

                    if(patternDob.test(dob) == true){
                        //para.innerHTML="We succesfully done Javascript Validation";
                    
                        console.log("Done");
                        return true;

                    }else{
                        para.innerHTML="Please Enter Validate Date";
                        return false;
                    }

                

            }else{
                para.innerHTML="Gender Cannot contains Number";
                return false;
            }

        }else{
            para.innerHTML="Name Cannot Contains Number";
            return false;
        }

    }else{
        para.innerHTML="User Name cannot Contains Number or Special Character";
        return false;
    }
}
}
