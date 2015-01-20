<?php 

//$connection = mysql_connect('localhost','root','root') or die ("Couldn't connect to server.");  
//$db = mysql_select_db('joomla', $connection) or die ("Couldn't select database.");  
$db = JFactory::getDbo();
$search=$_POST['search']; 

$query = 'SELECT * FROM `#__comp_register` WHERE `macaddress` = "'.$search.'"'; 
  //$query = mysql_query($data) or die("Couldn't execute query. ". mysql_error()); 
  //$data2 = mysql_fetch_array($query); 
    $db->setQuery($query);
    $result = $db->loadAssoc();   
   
?> 

<!-- form to display record from database --> 
<form name="form" method="POST" action="index.php?option=com_content&view=article&id=55&catid=2&Itemid=145"> 

  First name: <input type="text" name="firstname" value="<?php echo $result[firstname]?>"/> <br> 
  Last name: <input type="text" name="lastname" value="<?php echo $result[lastname]?>"/> <br> 
  MAC: <input type="text" name="macaddress" value="<?php echo $result[macaddress]?>"/><br><br> 
    <input type="text" name="keyfield" value="<?php echo $search?>">   
  <input type="submit"  value="submit"> 
</form> 


