<?php
//Datas
date_default_timezone_set('America/Sao_Paulo');
//echo date('d/m/Y H:i:s');
//echo "<hr>";

$date = date('Y-m-d'); //date
$datetime = date('Y-m-d H:i:s'); //Datetime

//echo $datetime;

//TIME
$time = time();
//echo date('d/m/Y', $time);

//MKTIME
$data_pagamento = mktime(15, 30, 00, 15, 2022);
//echo date('d/m - h:i, $data_pagamento');

//STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);
//echo date('d/m/Y', $data);


?>