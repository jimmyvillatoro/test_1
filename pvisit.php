<?php
$output = NULL;
$ipaddress = '';

function addTin()
{
    date_default_timezone_set("Europe/London");
    $date = date("Y-m-d");
    $time = date("H:i:s", time());
    $datetime_1 = $date . " " . $time;
    return $datetime_1;
}

function addVisit($x)
{
    //write_visita ();
      $latitude_1 = 0;
      $longitude_1 =0;

    $ip_addr = $_SERVER['REMOTE_ADDR'];
    $geoplugin = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip_addr));
    if (is_numeric($geoplugin['geoplugin_latitude']) && is_numeric($geoplugin['geoplugin_longitude'])) {
        $latitude_1 = $geoplugin['geoplugin_latitude'];
        $longitude_1 = $geoplugin['geoplugin_longitude'];
    }

  include 'dat/cdb/db.php';

    $Ip_1 = get_client_ip();
    $postal_code_1 = 'Desconocido'; //getZipcode($Ip_1);
    $city_1 = detect_city($Ip_1);
    $country_1 = str_pad(ip_info($new_ip, "Country"), 25);
    $domain_1 = "consulting.aranath-zenitram.eu";
    $landing_1 = "landing_Chile/es";
    $from_1 = "Ninguno";
    $datetime_1 = addTin();
    $visit_number_1 = 1;
    $var_1 = $x;
    $type_1 = 0; //vacio
    $status_1 = 1;  //activo
    $iduser_1 = 2; //usuario
    $ip_1 = get_client_ip();

    if ($var_1 == 0)
        $from_1 = "Desconocido";
    if ($var_1 == 1)
        $from_1 = "Correo";
    if ($var_1 == 2)
        $from_1 = "Etiqueta";
    if ($var_1 == 3)
        $from_1 = "Desconocido";
    if ($var_1 > 7)
        $from_1 = "Desconocido";

        $resultado = mysqli_query($db_connection, "SELECT idip_1, visit_number_1  FROM  ip_1  WHERE ip_1 LIKE '%" . $ip_1 . "%' AND iduser_1 = '".$iduser_1."' ");

        if (mysqli_num_rows($resultado) > 0) {
            while ($row = mysqli_fetch_array($resultado)) {
                $idip_1 = $row['idip_1'];
                $visit_number_1 = $row['visit_number_1'];
            }

            $visit_number_1 = $visit_number_1 + 1;
            $type_1 = 1;

            $update_value = "UPDATE ip_1 SET  visit_number_1= '" . $visit_number_1 . "'  WHERE ip_1 LIKE '%" . $ip_1 . "%' ";
            $retry_value = mysqli_query($db_connection, $update_value);

            $insert_value = "INSERT INTO visit_1( latitude_1, longitude_1, postal_code_1, city_1, country_1, domain_1, landing_1, from_1, datetime_1, var_1, type_1, status_1, idip_1) VALUES ( '" . $latitude_1 . "', '" . $longitude_1 . "', '" . $postal_code_1 . "',  '" . $city_1 . "',  '" . $country_1 . "',  '" . $domain_1 . "',  '" . $landing_1 . "',  '" . $from_1 . "',  '" . $datetime_1 . "', '" . $var_1 . "',  '" . $type_1 . "',  '" . $status_1 . "',  '" . $idip_1 . "')";
            $retry_value = mysqli_query($db_connection, $insert_value);
        } else {

            $visit_number_1 = 1;
            $insert_value = "INSERT INTO ip_1(ip_1, visit_number_1, iduser_1) VALUES ( '" . $ip_1 . "',  '" . $visit_number_1 . "' ,  '" . $iduser_1."')";
            $retry_value = mysqli_query($db_connection, $insert_value);

            $resultado = mysqli_query($db_connection, "SELECT idip_1  FROM  ip_1  WHERE ip_1 = '" . $ip_1 . "' AND iduser_1 = '".$iduser_1."'  ");
 
            while ($row = mysqli_fetch_array($resultado))
                $idip_1 = $row['idip_1'];



            $insert_value = "INSERT INTO visit_1( latitude_1, longitude_1, postal_code_1, city_1, country_1, domain_1, landing_1, from_1, datetime_1, var_1, type_1, status_1, idip_1) VALUES ( '" . $latitude_1 . "', '" . $longitude_1 . "', '" . $postal_code_1 . "',  '" . $city_1 . "',  '" . $country_1 . "',  '" . $domain_1 . "',  '" . $landing_1 . "',  '" . $from_1 . "',  '" . $datetime_1 . "', '" . $var_1 . "',  '" . $type_1 . "',  '" . $status_1 . "',  '" . $idip_1 . "')";
            $retry_value = mysqli_query($db_connection, $insert_value);
        }
    

    mysqli_close($db_connection);
}

function updMsn($msn)
{
$iduser_1=2;
    if (strlen($msn) > 0) {

        $dt = addTin();
        include 'dat/cdb/db.php';
        $ip_1 = get_client_ip();
        $datetime_1 = $dt;
        $message_1 = $msn;

        $resultado = mysqli_query($db_connection, "SELECT idip_1  FROM  ip_1  WHERE ip_1 LIKE '%" . $ip_1 . "%'  AND iduser_1 = '".$iduser_1."' ");
        if (mysqli_num_rows($resultado) > 0)
            while ($row = mysqli_fetch_array($resultado))
                $idip_1 = $row['idip_1'];



        $resultado = mysqli_query($db_connection, "SELECT idvisit_1 FROM visit_1 WHERE idip_1 LIKE '%" . $idip_1 . "%' ");
        if (mysqli_num_rows($resultado) > 0)
            while ($row = mysqli_fetch_array($resultado))
                $idvisit_1 = $row['idvisit_1'];

        $status_1 = 0; //recibido
        $landing_action_1 = "AL CERRAR";
        $insert_value = "INSERT INTO detail_visit_1( message_1, landing_action_1, datetime_1, status_1, idvisit_1) VALUES ('" . $message_1 . "',  '" . $landing_action_1 . "',  '" . $datetime_1 . "',  '" . $status_1 . "',  '" . $idvisit_1 . "')";
        $retry_value = mysqli_query($db_connection, $insert_value);

        $x = 1;
        mysqli_close($db_connection);

        return $x;
    }
}

function addAct($msn)
{
$iduser_1=2;
    $dt = addTin();


    include 'dat/cdb/db.php';
    $ip_1 = get_client_ip();
    $datetime_1 = $dt;
    $message_1 = $msn;
$iduser_1=2;
    $resultado = mysqli_query($db_connection, "SELECT idip_1  FROM  ip_1  WHERE ip_1 LIKE '%" . $ip_1 . "%' AND iduser_1 = '".$iduser_1."' ");
    if (mysqli_num_rows($resultado) > 0)
        while ($row = mysqli_fetch_array($resultado))
            $idip_1 = $row['idip_1'];



    $resultado = mysqli_query($db_connection, "SELECT idvisit_1 FROM visit_1 WHERE idip_1 LIKE '%" . $idip_1 . "%' ");
    if (mysqli_num_rows($resultado) > 0)
        while ($row = mysqli_fetch_array($resultado))
            $idvisit_1 = $row['idvisit_1'];

    $status_1 = 0; //recibido
    $landing_action_1 = "AL ELEGIR";
    $insert_value = "INSERT INTO detail_visit_1( message_1, landing_action_1, datetime_1, status_1, idvisit_1) VALUES ('" . $message_1 . "',  '" . $landing_action_1 . "',  '" . $datetime_1 . "',  '" . $status_1 . "',  '" . $idvisit_1 . "')";


    $retry_value = mysqli_query($db_connection, $insert_value);
    $x = 1;
    mysqli_close($db_connection);
    return $x;
}

function delSub($pemail)
{
    include 'dat/cdb/db.php';
$iduser_1=2;
    $ip_1 = get_client_ip();
    $message_1 = $msn;
    $status_1 = 0; //recibido
    $email_1 = $pemail;
    $landing_action_1 = "UNSUSCRIBE";
    $datetime_1=addTin();
    $cuerpo = 'Hola ' . $name_1 . ', has solicitado ' . $landing_action_1 . ' del correo ' . $email_1 . ' aun que somos los mejores en este servicio, respetamos tu decisión ten un buen dia.';
    $ip_1 = get_client_ip();
    $message_1 = "Cancelar tú suscripción";;
    include 'dat/cdb/db.php';
    $resultado = mysqli_query($db_connection, "SELECT idip_1  FROM  ip_1  WHERE ip_1 LIKE '%" . $ip_1 . "%' ");

    if (mysqli_num_rows($resultado) > 0)
        while ($row = mysqli_fetch_array($resultado))
            $idip_1 = $row['idip_1'];

    $resultado = mysqli_query($db_connection, "SELECT idvisit_1 FROM visit_1 WHERE idip_1 LIKE '%" . $idip_1 . "%' ");

    if (mysqli_num_rows($resultado) > 0)
        while ($row = mysqli_fetch_array($resultado))
            $idvisit_1 = $row['idvisit_1'];
    $status_1 = 0; //recibido

    $message_1 = $pemail;
    $insert_value = "INSERT INTO detail_visit_1( message_1, landing_action_1, datetime_1, status_1, idvisit_1) VALUES ('" . $message_1 . "',  '" . $landing_action_1 . "',  '" . $datetime_1 . "',  '" . $status_1 . "',  '" . $idvisit_1 . "')";
    $retry_value = mysqli_query($db_connection, $insert_value);

    mail($cor, 'CANCELACION Prospecto ', $cuerpo, '');
}

function write_visita()
{

    $archivo = "visitas.txt";

    $ip = "mi.ip.";

    $new_ip = get_client_ip();

    if ($new_ip !== $ip) {

        $now = new DateTime();

        if (!$_GET) {

            $datos = "*POST: " . $_POST;
        } else {

            $peticion = explode('/', $_GET['PATH_INFO']);

            $datos = str_pad($peticion[0], 10) . ' ' . $peticion[1];
        }

        $txt =  str_pad($new_ip, 25) . " " . str_pad($now->format('Y-m-d H:i:s'), 25) . " " . str_pad(ip_info($new_ip, "Country"), 25) . " var=" . $_GET['x'] . " " . json_encode($datos);

        $myfile = file_put_contents($archivo, $txt . PHP_EOL, FILE_APPEND);
    }
}
function get_client_ip()
{

    global $ipaddress;

    if (getenv('HTTP_CLIENT_IP'))

        $ipaddress = getenv('HTTP_CLIENT_IP');

    else if (getenv('HTTP_X_FORWARDED_FOR'))

        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');

    else if (getenv('HTTP_X_FORWARDED'))

        $ipaddress = getenv('HTTP_X_FORWARDED');

    else if (getenv('HTTP_FORWARDED_FOR'))

        $ipaddress = getenv('HTTP_FORWARDED_FOR');

    else if (getenv('HTTP_FORWARDED'))

        $ipaddress = getenv('HTTP_FORWARDED');

    else if (getenv('REMOTE_ADDR'))

        $ipaddress = getenv('REMOTE_ADDR');

    else

        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}
function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE)
{



    global $output;

    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {

        $ip = $_SERVER["REMOTE_ADDR"];

        if ($deep_detect) {

            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))

                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))

                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }



    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));

    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");

    $continents = array(

        "AF" => "Africa",

        "AN" => "Antarctica",

        "AS" => "Asia",

        "EU" => "Europe",

        "OC" => "Australia (Oceania)",

        "NA" => "North America",

        "SA" => "South America"

    );



    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {

        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {

            switch ($purpose) {

                case "location":

                    $output = array(



                        "city"           => @$ipdat->geoplugin_city,

                        "state"          => @$ipdat->geoplugin_regionName,

                        "country"        => @$ipdat->geoplugin_countryName,

                        "country_code"   => @$ipdat->geoplugin_countryCode,

                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],

                        "continent_code" => @$ipdat->geoplugin_continentCode

                    );

                    break;

                case "address":



                    $address = array($ipdat->geoplugin_countryName);

                    if (@strlen($ipdat->geoplugin_regionName) >= 1)

                        $address[] = $ipdat->geoplugin_regionName;

                    if (@strlen($ipdat->geoplugin_city) >= 1)

                        $address[] = $ipdat->geoplugin_city;

                    $output = implode(", ", array_reverse($address));

                    break;

                case "city":

                    $output = @$ipdat->geoplugin_city;

                    break;

                case "state":

                    $output = @$ipdat->geoplugin_regionName;

                    break;

                case "region":

                    $output = @$ipdat->geoplugin_regionName;

                    break;

                case "country":

                    $output = @$ipdat->geoplugin_countryName;

                    break;

                case "countrycode":

                    $output = @$ipdat->geoplugin_countryCode;

                    break;
            }
        }
    }



    return $output;
}
function detect_city($ip)
{



    $default = 'Desconocida';


    if (!is_string($ip) || strlen($ip) < 1 || $ip == '127.0.0.1' || $ip == 'localhost')
        $ip = '8.8.8.8';


    $curlopt_useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)';


    $url = 'http://ipinfodb.com/ip_locator.php?ip=' . urlencode($ip);
    $ch = curl_init();



    $curl_opt = array(

        CURLOPT_FOLLOWLOCATION  => 1,

        CURLOPT_HEADER      => 0,

        CURLOPT_RETURNTRANSFER  => 1,

        CURLOPT_USERAGENT   => $curlopt_useragent,

        CURLOPT_URL       => $url,

        CURLOPT_TIMEOUT         => 1,

        CURLOPT_REFERER         => 'http://' . $_SERVER['HTTP_HOST'],

    );



    curl_setopt_array($ch, $curl_opt);



    $content = curl_exec($ch);



    if (!is_null($curl_info)) {

        $curl_info = curl_getinfo($ch);
    }



    curl_close($ch);



    if (preg_match('{<li>City : ([^<]*)</li>}i', $content, $regs)) {

        $city = $regs[1];
    }

    if (preg_match('{<li>State/Province : ([^<]*)</li>}i', $content, $regs)) {

        $state = $regs[1];
    }



    if ($city != '' && $state != '') {

        $location = $city . ', ' . $state;

        return $location;
    } else {

        return $default;
    }
}
function getZipcode($address)
{

    if (!empty($address)) {

        //Formatted address

        $formattedAddr = str_replace(' ', '+', $address);

        //Send request and receive json data by address

        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddr . '&sensor=true_or_false');

        $output1 = json_decode($geocodeFromAddr);

        //Get latitude and longitute from json data

        $latitude  = $output1->results[0]->geometry->location->lat;

        $longitude = $output1->results[0]->geometry->location->lng;

        //Send request and receive json data by latitude longitute

        $geocodeFromLatlon = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng=' . $latitude . ',' . $longitude . '&sensor=true_or_false');

        $output2 = json_decode($geocodeFromLatlon);

        if (!empty($output2)) {

            $addressComponents = $output2->results[0]->address_components;

            foreach ($addressComponents as $addrComp) {

                if ($addrComp->types[0] == 'postal_code') {

                    //Return the zipcode

                    return $addrComp->long_name;
                }
            }

            return false;
        } else {

            return false;
        }
    } else {

        return false;
    }
}
