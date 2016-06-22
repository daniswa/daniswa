





function validElements(){
    var fName = document.forms['emailForm']['fName'].value;
    var lName = document.forms['emailForm']['lName'].value;
    var email = document.forms['emailForm']['email'].value;
    var comment = document.forms['emailForm']['comment'].value;
    alert("'" + comment + "'");
    if(fName == ''){
        alert('Please enter your first name.');
    }else if(lName == ''){
        alert('Please enter your last name.');
    }else if(email == ''){
        alert('Please enter your email address.');
    }else if(comment == null){
        alert('Please leave a comment.');
    }else{
        return true;
    }
}