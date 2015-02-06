<?php 
defined('_JEXEC') or die('Access denied');
//$doc=JFactory::getDocument();
//$doc->addScript('code/js/macformvalidate.js');
JHTML::_('behavior.formvalidation');
$db = JFactory::getDbo();
$search=convertToMAC($_POST['search']); 

$query  = $db->getQuery(true); 
$query->select(array('macaddress', 'datetime', 'fixedip', 'firstname', 'lastname', 'email', 'room', 'comment')) 
    ->from($db->quoteName('#__comp_register')) 
    ->where($db->quoteName('macaddress') . "=" . '"'.$search.'"');
$db->setQuery($query); 
$result = $db->loadAssoc();
?>
<script type="text/javascript">
/* Override joomla.javascript, as form-validation not work with ToolBar */
function submitbutton() {   
    var f = document.macTwoForm;
    if (document.formvalidator.isValid(f)) {
        document.macTwoForm.submit(); 
        return true;
    }
    else {
        var msg = new Array();
        msg.push('Nieprawidłowy wpis:');           
        if($('fixedip').hasClass('invalid')){
            msg.push('<?php echo JText::_('Stały IP')?>');
        }
        if($('firstname').hasClass('invalid')){
            msg.push('<?php echo JText::_('Imię użytkownika')?>');
        }
        if($('lastname').hasClass('invalid')){
            msg.push('<?php echo JText::_('Nazwisko użytkownika')?>');
        }
        if($('email').hasClass('invalid')){
            msg.push('<?php echo JText::_('Email')?>');
        }
        if($('room').hasClass('invalid')){
            msg.push('<?php echo JText::_('Numer pokoju')?>');
        }
        document.getElementById('system-message').innerHTML = msg.join('<br>');
        //alert (msg.join('\n'));
        return false;
    }     
}
</script>
<?php
if(sizeof($result) == 0) {
    echo '<h3 style="color: red;">Nie znaleziono danych!</h3>';
} else {
    echo '<h3 style="color: green;">Znaleziono dane:</h3>';
    echo displayOutput($result);
}

function displayOutput($input) {
    $out  = '<form name="macTwoForm" method="POST" onsubmit="return submitbutton();" action="index.php?option=com_content&view=article&id=55&catid=2&Itemid=145">';
    $out .= '<table>';
    $out .= '<tr><td>MAC:</td><td><input type="text" name="macaddress" value="' . $input[macaddress] . '" readonly /></td></tr>';
    $out .= '<tr><td>Data zgłoszenia rejestracji:</td><td><input type="text" name="datetime" value="' . $input[datetime] . '" readonly/></td></tr>';
    $out .= '<tr><td>Stały adres IP: </td><td><input class="validate-fixedip" type="text" id="fixedip" name="fixedip" value="' . $input[fixedip] . '" /></td></tr>';
    $out .= '<tr><td>Imię użytkownika: </td><td><input class="required validate-username" type="text" id="firstname" name="firstname" value="' . $input[firstname] . '" /></td></tr>';
    $out .= '<tr><td>Nazwisko użytkownika: </td><td><input class="required validate-username" type="text" id="lastname" name="lastname" value="' . $input[lastname] .'" /></td></tr>';
    $out .= '<tr><td>E-mail użytkownika: </td><td><input class="required validate-myemail" type="text" id="email" name="email" value="' . $input[email] . '" />@ippt.pan.pl</td></tr>';
    $out .= '<tr><td>Numer pokoju: </td><td><input class="required" type="text" id="room" name="room" value="' . $input[room] . '" /></td></tr>';
    $out .= '<tr><td>Uwagi:</td><td><textarea name="comment" cols="50"rows="3">' . $input[comment] . '</textarea></td></tr>';
    $out .= '</table>';
    $out .= '<input type="submit" class="validate" value="Zapisz">';
    $out .= '</form>';
    return $out;
}

function convertToMAC($input) {
    $pattern1="/^([0-9a-fA-F]{2}[-]){5}([0-9a-fA-F]{2})$/";
    $pattern2="/^([0-9a-fA-F]{2}[:]){5}([0-9a-fA-F]{2})$/";
    if(preg_match($pattern1,$input) == 1) {
        $chars = explode("-", $input);
    } else if(preg_match($pattern2,$input) == 1) {
        $chars = explode(":", $input);
    } else {                                //$pattern =  "/^[0-9a-fA-F]{12}$/"
        $chars = str_split($input, 2);
    }
    $result = implode(":", $chars);
    return strtolower($result);
}
?>

