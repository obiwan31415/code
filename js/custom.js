jQuery(function(){
    document.formvalidator.setHandler('mac', 
        function(value) {
            regex1=/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
            regex2=/^[0-9A-Fa-f]{12}$/; 
            return (regex1.test(value) || regex2.test(value));
   });
});

jQuery(function(){
    document.formvalidator.setHandler('myemail', 
        function(value) {
            regex=/^[^@]+$/;
            return (regex.test(value));
   });
});

function myValidateForm() {
    regex1=/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
    regex2=/^[0-9A-Fa-f]{12}$/; 
    var x = document.forms["macUpdateForm"]["search"].value;
    regexTest = regex1.test(x) || regex2.test(x);
    if (x==null || x=="") {
        alert("Pole musi być wypełnione.");
        return false;
    } else if(regexTest == false) {
        alert("Nieprawidłowy wpis.");
        return false;
    }
}

/*else if (regex1.test(value) || regex2.test(value)) {
            alert("Nieprawidłowy adres MAC");
            return false;
    }*/