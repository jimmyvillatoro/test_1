<?php
$ipaddress = '';
function get_client_ip()
{
    global $ipaddress;
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else 
    if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else            $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function addTin()
{
    date_default_timezone_set("Europe/London");
    $date = date("Y-m-d");
    $time = date("H:i:s", time());
    $datetime_1 = $date . " " . $time;
    return $datetime_1;
}


include 'dat/cdb/db.php';
$cor = 'thephantom@aranath-zenitram.eu';
$cor = 'contact.cos@aranath-zenitram.eu';

$px =$_POST['px'];//la var_1
$pid_1 = $_POST['pid'];//el producto
$name_1 = $_POST['pname'];
$lastname_1 = $_POST['plastname'];
$fullname_1 = $name_1 . ' ' . $lastname_1;
$birthday_1 = $_POST['pbirthday'];
$city_1 = $_POST['pcity'];
$country_1 = $_POST['pcountry'];
$email_1 = $_POST['pemail'];
$copy_1 = $_POST['pcopy'];
$inf_1 = $_POST['pinf'];

$address_1 = $_POST['paddress'];
$postal_code_1 = $_POST['ppostal_code'];
$phone_1 = $_POST['pphone'];
$service_1 = $_POST['pservice'];
$select_1 = $_POST['pselect'];

$message_1 = $_POST['pmsn'];
$status_1 = $_POST['pstatus'];
$datetime_1  = addTin();

if ($inf_1 == 1) 
$status_1 = 1; 

if ($pid_1 == 0) {
    $pid = "Formulario de preguntas";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por rellenar nuestro ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 1) {
    $pid = "Marketing: Ideas para negocios";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 2) {
    $pid = "Configuración de seguridad de facebook";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 3) {
    $pid = "Diseño corporativo pequeño";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 4) {
    $pid = "Pagina Web Mediana";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 5) {
    $pid = "Pagina Web E-Commerce";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 6) {
    $pid = "Logotipo Profesional";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 7) {
    $pid = "Paquete mediano de Redes Sociales ¡Profesionaliza tu negocio!";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}
if ($pid_1 == 8) {
    $pid = "Campaña de profesional de Marketing";
    $cuerpo = 'Hola ' . $name_1 . ', gracias por solicitar nuestros servicios,    tu pedido es por ' . $pid . ' nosotros te enviaremos un correo de confirmacion a ' . $email_1 . '    y nos contactaremos al numero ' . $lada_1 . '' . $phone_1 . ' en base al mensaje ' . $message_1 . ', ten un buen dia.';
}

$service_1 =$pid;

if ($pid_1 == 10){
    $pid = "darse de baja en Aranath Zenitram Consulting";
    $cuerpo = 'Hola , hay un pedido para '.$pid.' el correo '.$email_1.' ya no debe de recibir nuestros correos electrónicos, ten un buen dia';
    mail($cor, 'Baja en Aranath Zenitram Consulting', $cuerpo, '');
}else{

    
if ($copy_1 == 1) mail($email_1, 'Copia del mensaje ', $cuerpo, '');

$ip_1 = get_client_ip();
$resultado1 = mysqli_query($db_connection, "SELECT idip_1  FROM  ip_1  WHERE ip_1 LIKE '%" . $ip_1 . "%' ");
if (mysqli_num_rows($resultado1) > 0)
    while ($row = mysqli_fetch_array($resultado1))
        $idip_1 = $row['idip_1'];
$resultado2 = mysqli_query($db_connection, "SELECT idvisit_1 FROM visit_1 WHERE idip_1 LIKE '%" . $idip_1 . "%' ");
if (mysqli_num_rows($resultado2) > 0)
    while ($row = mysqli_fetch_array($resultado2))
        $idvisit_1 = $row['idvisit_1'];

$insert_value = "INSERT INTO landing_1( name_1, lastname_1, fullname_1, birtday_1, city_1, country_1, postal_code_1, address_1, email_1, phone_1, service_1, select_1, message_1, datetime_1, status_1, idvisit_1) VALUES ( '" . $name_1 . "',  '" . $lastname_1 . "',  '" . $fullname_1 . "',  '" . $birthday_1 . "',  '" . $city_1 . "',  '" . $country_1 . "',  '" . $postal_code_1 . "',  '" . $address_1 . "',  '" . $email_1 . "',  '" . $phone_1 . "',  '" . $service_1 . "',  '" . $select_1 . "',  '" . $message_1 . "',  '" . $datetime_1 . "',  '" . $status_1 . "',  '" . $idvisit_1 . "')";
$retry_value = mysqli_query($db_connection, $insert_value);

mail($cor, 'Prospecto de consulting', $cuerpo, '');

if ($pid_1 == 0) header('Location: thankyou_form.php');
if ($pid_1 == 1) header('Location: busniess_payment.php');
if ($pid_1 == 2) header('Location: facebook_payment.php');
if ($pid_1 == 3) header('Location: Diseno_thankyou.php');
if ($pid_1 == 4) header('Location: mediana_thankyou.php');
if ($pid_1 == 5) header('Location: ecomerce_thankyou.php');
if ($pid_1 == 6) header('Location: logotipo_thankyou.php');
if ($pid_1 == 7) header('Location: social_thankyou.php');
if ($pid_1 == 8) header('Location: social1_thankyou.php');
  
}

if ($pid_1 == 10) header('Location: thankyou.php');
if ($pid_1 > 10) header('Location: index.php');

mysqli_close($db_connection);