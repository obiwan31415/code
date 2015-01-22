<?php 
$macaddress = $_POST['macaddress']; 
$datetime   = $_POST['datetime']; 
$fixedip    = $_POST['fixedip']; 
$firstname  = $_POST['firstname']; 
$lastname   = $_POST['lastname']; 
$email      = $_POST['email']; 
$room       = $_POST['room']; 
$comment    = $_POST['comment']; 

//update record
$db     = JFactory::getDbo();
$query  = $query = $db->getQuery(true); 
$query->update($db->quoteName('#__comp_register')) 
      ->set(array(
            $db->quoteName('fixedip')   . "=" . '"'.$fixedip.'"', 
            $db->quoteName('firstname') . "=" . '"'.$firstname.'"',
            $db->quoteName('lastname')  . "=" . '"'.$lastname.'"', 
            $db->quoteName('email')     . "=" . '"'.$email.'"', 
            $db->quoteName('room')      . "=" . '"'.$room.'"', 
            $db->quoteName('firstname') . "=" . '"'.$firstname.'"', 
            $db->quoteName('comment')   . "=" . '"'.$comment.'"', 
      ))
      ->where(array($db->quoteName('macaddress') . "=" . '"'.$macaddress.'"')); 
$db->setQuery($query); 
$result = $db->query();
if($result) {
    echo '<h3 style="color: green;">Dane zostały zapisane</h3>';
    //display updated record
    $query  = $db->getQuery(true); 
    $query->select(array('macaddress', 'datetime', 'fixedip', 'firstname', 'lastname', 'email', 'room', 'comment')) 
        ->from($db->quoteName('#__comp_register')) 
        ->where($db->quoteName('macaddress') . "=" . '"'.$macaddress.'"');
    $db->setQuery($query); 
    $result = $db->loadAssoc();
} else {
    echo "<h3 color: red;>Błąd zapisu danych</h3>";
}
?>
<table>
    <tr><td>MAC:</td><td><input type="text" name="macaddress" value="<?php echo $result[macaddress]?>" readonly /></td></tr>
    <tr><td>Data zgłoszenia rejestracji:</td><td><input type="text" name="datetime" value="<?php echo $result[datetime]?>" readonly /></td></tr>
    <tr><td>Stały adres IP: </td><td><input type="text" name="fixedip" value="<?php echo $result[fixedip]?>" readonly /></td></tr>
    <tr><td>Imię użytkownika: </td><td><input type="text" name="firstname" value="<?php echo $result[firstname]?>" readonly /></td></tr>
    <tr><td>Nazwisko użytkownika: </td><td><input type="text" name="lastname" value="<?php echo $result[lastname]?>" readonly /></td></tr>
    <tr><td>E-mail użytkownika: </td><td><input type="text" name="email" value="<?php echo $result[email]?>" readonly />@ippt.pan.pl</td></tr>
    <tr><td>Numer pokoju: </td><td><input type="text" name="room" value="<?php echo $result[room]?>" readonly /></td></tr>
    <tr><td>Uwagi:</td><td><textarea name="comment" cols="50"rows="3" readonly ><?php echo $result[comment]?></textarea></td></tr>
</table>