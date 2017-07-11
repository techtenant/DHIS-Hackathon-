<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://play.dhis2.org/release1/api/25/organisationUnits.geojson?level=2&level=4",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic YWRtaW46ZGlzdHJpY3Q=",
    "cache-control: no-cache",
    "postman-token: 1e7e85f8-8d4d-3270-2d3d-2683f06ec61a"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>