<?php 

$name =$_POST['name'];
$email=$_POST['email'];
$cell=$_POST['cell'];
$message=$_POST['message'];

//cabecera
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
//dirección del remitente 
$headers .= "From: "."gordillo0529@gmail.com"." < " . "gordillo0529@gmail.com" . " >\r\n";
$mail_to = "yariko0529@gmail.com";
//Enviamos el mensaje a tu_dirección_   email 
$bool = mail($mail_to, $name, $message . ' cell:' . $cell . "email:" . $email, $headers);
$result;
if ($bool) {
    $result['var'] = true;
    $result['msg'] = "Mensaje enviado";
} else {
    $result['var'] = false;
    $result['msg'] = "Mensaje no enviado";
}


header("Location: http://webreadynow.com/thanks");
	
 ?>