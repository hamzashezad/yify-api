<?php

$c = curl_init();

curl_setopt($c, CURLOPT_URL, "https://www.yifytorrent.xyz/api/v2/list_movies.json");

curl_setopt($c,  CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($c);

$output = json_decode($output);
$output = get_object_vars($output);
$data = get_object_vars($output['data']);
