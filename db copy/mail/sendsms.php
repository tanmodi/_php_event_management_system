<?php

// $fields = array(
//     "sender_id" => "FTWSMS",
//     "message" => "Your OTP is 5566 for Login",
//     "template_id" => "DLT_CONTENT_TEMPLATE_ID",
//     "entity_id" => "DLT_ENTITY_ID",
//     "route" => "dlt_manual",
//     "numbers" => "9205875182",
// );

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_SSL_VERIFYHOST => 0,
//   CURLOPT_SSL_VERIFYPEER => 0,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => json_encode($fields),
//   CURLOPT_HTTPHEADER => array(
//     "authorization: kaGNdrFqnTuZQ0hINefJ7IWn1UL4VX9u9l6u4AkbK8t1gQLzEa7aCSkJ6uVh",
//     "accept: */*",
//     "cache-control: no-cache",
//     "content-type: application/json"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }



$fields = array(
    "variables_values" => "987654",
    "route" => "otp",
    // "numbers" => "9717449131",
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: kaGNdrFqnTuZQ0hINefJ7IWn1UL4VX9u9l6u4AkbK8t1gQLzEa7aCSkJ6uVh",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
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
