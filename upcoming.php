<?php

$c = curl_init();

curl_setopt($c, CURLOPT_URL, 'https://yts.to/api/v2/list_upcoming.json');

curl_setopt($c,  CURLOPT_RETURNTRANSFER, 1);

$uoutput = curl_exec($c);

$uoutput = json_decode($uoutput);
$uoutput = get_object_vars($uoutput);
$udata = get_object_vars($uoutput['data']);

curl_close($c);
