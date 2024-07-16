
function formValidator(){
    var name=document.getElementById('fname');
    var name=document.getElementById('lname');
    var phone=document.getElementById('phone');
    var email=document.getElementById('email');
    var submit=document.getElementById('submit');
        if(notEmpty(name,"name cannot be empty")){
          if(isAlphabet(name,"Enter only letters")){
            if(notEmpty(email,"email cannot be empty")){
                if(emailValidator(email,"enter valid email id")){
                  if(notEmpty(phone,"phone cannot be empty")){
                   if(LengthRestriction(phone,"phone must contain 10 digit/13 digits(with+)")){
                    if(notEmpty(password,"Enter password")){
                     if(LengthRestriction1(password,6)){
                        if(validatePassword(password,"must contain 1 alphabet,1no,1 character @#$&!")){
                          if(confirmPassword(cpassword,password))
                             return true;
                        }
                           }
                        }
                     }
                 }
                }               
                    
            }
        }
    }
    return false;
    }
    function notEmpty(elem,helperMsg){
    if(elem.value.length==0){
    alert(helperMsg);
    elem.focus();
    return false;
    }
    return true;
    }
    function isAlphabet(elem,helperMsg){
    var check=/^[a-zA-Z]+$/;
    if(elem.value.match(check)){
    return true;
    }
    else{
    alert(helperMsg);
    elem.focus();
    return false;
    }
    }

    function LengthRestriction1(elem,min){
    var num=min;
    if(elem.value.length>=num){
    return true;
    }
    else{
    alert("password must be more then 6");
    elem.focus();
    return false;
    }
    }
    function LengthRestriction(elem,helperMsg){
        var check=/^[+]$/;
        if (elem.value.match(check)) {
            if(elem.value.length==14){
              return true;
            }else{
              alert(helperMsg);
              elem.focus();
              return false;
            }
        }
        else{
            if(elem.value.length==10){
                return true;
              }else{
                alert(helperMsg);
                elem.focus();
                return false;
              }
        }
        }
      
    function emailValidator(elem,helperMsg){
    var check=/^[a-zA-Z0-9_.±]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/;
    if(elem.value.match(check)){
    return true;
    }
    else{
    alert(helperMsg);
    elem.focus();
    return false;
    }
    }
    function validatePassword(elem,helperMsg){
        var check=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$&!])[^\s]{6,}$/;
        if(elem.value.match(check)){
            return true;
        }else{
            alert(helperMsg)
            elem.focus();
            return false;
        }
    }
    function confirmPassword(elem,check){
        
            const pwd = elem.value.trim();
            const cpwd = check.value.trim();
            
            if(pwd === cpwd){
                return true;
            }else{
                alert("Doesnt match password")
                elem.focus();
                return false;
            }
          }

    
  
    function validateSave(){
    alert("your response has been recorded")
    return false 
}