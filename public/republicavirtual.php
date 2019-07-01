<?php
header('Content-type: application/json');
$cep = $_GET['cep'];
$curl = curl_init();
curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://cep.republicavirtual.com.br/web_cep.php?formato=json&cep=' . $cep,
        CURLOPT_HEADER => false,
        CURLOPT_RETURNTRANSFER => true)
        );
$request = curl_exec($curl);
curl_close($curl);
//$trans = array("%E1" => "á", "%E9" => "é", "%ED" => "í", "%F3" => "ó","%FA" => "ú", "%D1" => "ñ", "%A1" => "Á", "%A9" => "É", "%AD" => "Í", "%B3" => "Ó" , "%BA" => "Ú", "%F1" => "ñ", "%E7" => "ç", "%20" => " ");
//$request = substr($request,24);
$request = str_replace("'",'"',$request);
//$request = strtr($request, $trans);
echo $request;
?>