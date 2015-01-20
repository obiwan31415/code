
<?php 
defined('_JEXEC') or die('Access denied');
//JHTML::_('behavior.formvalidation'); ?>
<script>
function myValidateForm() {
    regex1=/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
    regex2=/^[0-9A-Fa-f]{12}$/; 
    var x = document.forms["macUpdateForm"]["search"].value;
    regexTest = regex1.test(x) || regex2.test(x);
    if (x==null || x=="") {
        alert("First name must be filled out");
        return false;
    } else if(regexTest == false) {
        alert("Błędny MAC");
        return false;
    }
    
}
</script>
<form class="form-validate" id="macUpdateForm" name="macUpdateForm" method="POST" onsubmit="return myValidateForm();" action="index.php?option=com_content&view=article&id=54&catid=2&Itemid=145">
  Wyszukaj MAC: <input class="required validate-mac" type="text" id="search" name="search"> <br><br>
  <input type="submit" class="validate" value="Szukaj" >
</form>

