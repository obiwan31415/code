<?php 
defined('_JEXEC') or die('Access denied');
$db = JFactory::getDbo();
$search=convertToMAC($_POST['search']); 

$query  = $db->getQuery(true); 
$query->select(array('macaddress', 'datetime', 'fixedip', 'firstname', 'lastname', 'email', 'room', 'comment')) 
    ->from($db->quoteName('#__comp_register')) 
    ->where($db->quoteName('macaddress') . "=" . '"'.$search.'"');
$db->setQuery($query); 
$result = $db->loadAssoc();
if(sizeof($result) == 0) {
    echo '<h3 style="color: red;">Nie znaleziono danych!</h3>';
} else {
    echo '<h3 style="color: green;">Znaleziono dane:</h3>';
    echo displayOutput($result);
}

function displayOutput($input) {
    $out  = '<form name="form" method="POST" action="index.php?option=com_content&view=article&id=55&catid=2&Itemid=145">';
    $out .= '<table>';
    $out .= '<tr><td>MAC:</td><td><input type="text" name="macaddress" value="' . $input[macaddress] . '" readonly /></td></tr>';
    $out .= '<tr><td>Data zgłoszenia rejestracji:</td><td><input type="text" name="datetime" value="' . $input[datetime] . '" readonly/></td></tr>';
    $out .= '<tr><td>Stały adres IP: </td><td><input type="text" name="fixedip" value="' . $input[fixedip] . '" /></td></tr>';
    $out .= '<tr><td>Imię użytkownika: </td><td><input type="text" name="firstname" value="' . $input[firstname] . '" /></td></tr>';
    $out .= '<tr><td>Nazwisko użytkownika: </td><td><input type="text" name="lastname" value="' . $input[lastname] .'" /></td></tr>';
    $out .= '<tr><td>E-mail użytkownika: </td><td><input type="text" name="email" value="' . $input[email] . '" />@ippt.pan.pl</td></tr>';
    $out .= '<tr><td>Numer pokoju: </td><td><input type="text" name="room" value="' . $input[room] . '" /></td></tr>';
    $out .= '<tr><td>Uwagi:</td><td><textarea name="comment" cols="50"rows="3">' . $input[comment] . '</textarea></td></tr>';
    $out .= '</table>';
    $out .= '<input type="submit"  value="Zapisz">';
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

