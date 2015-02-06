//handler, MAC separator : or -, 12 digits no separator
/*jQuery(function(){
    document.formvalidator.setHandler('mac', 
        function(value) {
            regex1=/^(?:[0-9A-Fa-f]{2}([:-]?)){1}(?:[0-9A-Fa-f]{2}\1){4}([0-9A-Fa-f]{2})$/;
            return (regex1.test(value));
   });
});*/

//handler, no @ sign
/*jQuery(function(){
    document.formvalidator.setHandler('myemail', 
        function(value) {
            regex=/^[^@]+$/;
            return (regex.test(value));
   });
});*/

function validateMAC(value) {
    regex=/^(?:[0-9A-Fa-f]{2}([:-]?)){1}(?:[0-9A-Fa-f]{2}\1){4}([0-9A-Fa-f]{2})$/;
    //var x = value;
    regexTest = regex.test(value);
    if(regexTest == false) {
        alert("Nieprawidłowy wpis.");
        return false;
    }
}

function validateNotAtSign(value) {
    regex=/^[^@]+$/;
    regexTest = regex.test(value);
    if(regexTest == false) {
        alert("Nieprawidłowy wpis w polu Email.");
        return false;
    } else {
        alert("test alert");
    }
}

function validateNotEmpty(value) {
    if(value == null || value == "") {
        alert("Pole nie może byc puste.");
        return false;
    }
}

//form macOneForm, MAC separator : or -, 12 digits no separator + alert
function validateMacOne() {
    var result = true;
    result = validateMAC(document.forms["macOneForm"]["search"].value);
    if(result == false) {
        return false;
    }
}

//validate not at sign, not empty fields
function validateMacTwo() {
    //var result = true;
    result1 = validateNotAtSign(document.forms["macTwoForm"]["myemail"].value);
    //result2 = validateNotEmpty(document.forms["macTwoForm"]["firstname"].value);
    //result = result1 && result2;
    if(result1 == false) {
        return false;
    }
    return false;
}

function submitbutton() {   
    var f = document.adminForm;
    if (document.formvalidator.isValid(f)) {
        document.adminForm.submit(); 
        return true;
    }
    else {
        var msg = new Array();
        msg.push('Nieprawidłowy wpis:');           
        if($('email').hasClass('invalid')){
            msg.push('<?php echo JText::_('Email')?>');
        }
        alert (msg.join('\n'));
        return false;
    }     
}  
