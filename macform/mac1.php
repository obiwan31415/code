
<?php 
defined('_JEXEC') or die('Access denied'); 
//$doc=JFactory::getDocument();
//$doc->addScript('code/js/macformvalidate.js');
JHTML::_('behavior.formvalidation');
?>
<form class="form-validate" id="macUpdateForm" name="macUpdateForm" method="POST" action="index.php?option=com_content&view=article&id=54&catid=2&Itemid=145">
  Wyszukaj MAC: <input class="required validate-mac" type="text" id="search" name="search"> <br><br>
  <input type="submit" class="validate" value="Szukaj" >
</form>
<!-- <form class="" id="macOneForm" name="macOneForm" method="POST" onsubmit="return validateMacOne();" action="index.php?option=com_content&view=article&id=54&catid=2&Itemid=145">
  Wyszukaj MAC: <input class="" type="text" id="search" name="search"> <br><br>
  <input type="submit" class="" value="Szukaj" >
</form>
 -->
