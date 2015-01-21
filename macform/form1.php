<?php 
defined('_JEXEC') or die('Access denied');
$db = JFactory::getDbo();
$search=$_POST['search']; 
$query = 'SELECT * FROM `#__comp_register` WHERE `macaddress` = "'.$search.'"'; 
$db->setQuery($query);
$result = $db->loadAssoc();   
?> 

<!-- form to display record from database --> 
<form name="form" method="POST" action="index.php?option=com_content&view=article&id=55&catid=2&Itemid=145"> 
    <table>
        <tr><td>MAC:</td><td><input type="text" name="macaddress" value="<?php echo $result[macaddress]?>" readonly /></td></tr>
        <tr><td>Data zgłoszenia rejestracji:</td><td><input type="text" name="datetime" value="<?php echo $result[datetime]?>" readonly/></td></tr>
        <tr><td>Stały adres IP: </td><td><input type="text" name="fixedip" value="<?php echo $result[fixedip]?>" /></td></tr>
        <tr><td>Imię użytkownika: </td><td><input type="text" name="firstname" value="<?php echo $result[firstname]?>" /></td></tr>
        <tr><td>Nazwisko użytkownika: </td><td><input type="text" name="lastname" value="<?php echo $result[lastname]?>" /></td></tr>
        <tr><td>E-mail użytkownika: </td><td><input type="text" name="email" value="<?php echo $result[email]?>" />@ippt.pan.pl</td></tr>
        <tr><td>Numer pokoju: </td><td><input type="text" name="room" value="<?php echo $result[room]?>" /></td></tr>
        <tr><td>Uwagi:</td><td><textarea name="comment" cols="50"rows="3"><?php echo $result[comment]?></textarea></td></tr>
    </table>
     
  <input type="submit"  value="Zapisz"> 
</form> 


