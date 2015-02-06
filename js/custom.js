//handler, MAC separator : or -, 12 digits no separator
jQuery(function(){
    document.formvalidator.setHandler('mac', 
        function(value) {
            regex1=/^(?:[0-9A-Fa-f]{2}([:-]?)){1}(?:[0-9A-Fa-f]{2}\1){4}([0-9A-Fa-f]{2})$/;
            return (regex1.test(value));
   });
});

//handler, no @ sign
jQuery(function(){
    document.formvalidator.setHandler('myemail', 
        function(value) {
            //regex=/^[^@]+$/;
            regex=/^[A-Za-z0-9]+$/;
            return (regex.test(value));
   });
});

jQuery(function(){
    document.formvalidator.setHandler('fixedip', 
        function(value) {
            //regex=/^[^@]+$/;
            regex=/^\b(?:\d{1,3}\.){3}\d{1,3}\b$/;
            return (regex.test(value));
   });
});

