<?php 

function verify_ip($ip) {
  $int_status = "fail";
  return $int_status;
}

$allow_ip = array("192.168.56.1", "127.0.0.1");
$remote_ip = $_SERVER['REMOTE_ADDR'];
echo "Twoj IP: " . "$remote_ip" . "<br />";

$status = verify_ip();

echo "END" . "<br />";
$message = "Access allowed only from internal network" ;
if($status == "pass") {
  echo("PASSED");
} else {
    //exit($message);
  echo "status: $status";
}

?>
