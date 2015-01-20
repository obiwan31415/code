<?php 
//showIP();
echo "<p><pre>".var_dump(JFactory::getUser()->groups)."</pre></p>";
?>
<form  method="POST">
   <input type="submit" id="showIP" name="showIP" value="Show IP"/>
</form>
<?php
//echo JHtml::_('form.token');
if(isset($_POST['showIP'])) {
    showIP();
    //echo "dupa";
}
?>


<?php function showIP() {
    $remote_ip = $_SERVER['REMOTE_ADDR'];
echo "There is no place like $remote_ip<br /><br />";
}

function aponar()
{
    $user = JFactory::getUser();
    if (!$user->guest) {
        $usernam= $user->get('username');
//        $userealn= $user->get('name');
//        $userid= $user->get('id');
//        echo 'You are logged in as:<br />';
//        echo "User name :-) ".$usernam."<br />";
//        echo "Real name: ".$userealn."<br />";
//        echo "User ID    : ".$userid."<br />";
    }
    $aponarOKK=0;
    $aponarOKK=($usernam==='aponar_form')||($usernam==='mkowal')||
            ($usernam==='tk1mk2pp3')||($usernam==='pputek');
    $aponarOK=($aponarOKK==1);
    return $aponarOK;
}
?>