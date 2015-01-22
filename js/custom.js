jQuery(function(){
    document.formvalidator.setHandler('mac', 
        function(value) {
            regex1=/^(?:[0-9A-Fa-f]{2}([:-]?)){1}(?:[0-9A-Fa-f]{2}\1){4}([0-9A-Fa-f]{2})$/;
            return (regex1.test(value));
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
    regex1=/^(?:[0-9A-Fa-f]{2}([:-]?)){1}(?:[0-9A-Fa-f]{2}\1){4}([0-9A-Fa-f]{2})$/;
    var x = document.forms["macUpdateForm"]["search"].value;
    regexTest = regex1.test(x);// || regex2.test(x);
    if(regexTest == false) {
        alert("Nieprawidłowy wpis.");
        return false;
    }
}


    
