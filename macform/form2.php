<?php 

$db = JFactory::getDbo();
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$mac=$_POST['keyfield']; 

$query =  "UPDATE `#__comp_register` SET firstname='$firstname', lastname='$lastname' WHERE macaddress=".'"'.$mac.'"'; 
$db->setQuery($query);
//$db->query;

if($db->query()) {
    //display the changed record from database
    echo "Dane zostały zmienione<br>";
    echo "Imię: $firstname<br>";
    echo "Nazwisko: $lastname<br>";
    echo "MAC: $mac<br><br> ";
} else {
    echo "Błąd: " . $db->getErrorMessage();   
}
?>
<a href="index.php?option=com_content&view=article&id=53&catid=20&Itemid=139">Powrót do strony wyszukiwania</a>

