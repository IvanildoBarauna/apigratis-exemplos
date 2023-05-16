<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cluster.apigratis.com/api/v1/whatsapp/sendText',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_SSL_VERIFYHOST=> false,
  CURLOPT_SSL_VERIFYPEER=> false,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => '{
    "number": "5531994359434",
      "text": "Muito top!"
  }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'SecretKey: OBTENHA_O_SEU_SECRET_TOKEN_NO_PAINEL',
    'PublicToken: OBTENHA_O_SEU_PUBLIC_TOKEN_NO_PAINEL',
    'DeviceToken: OBTENHA_O_SEU_DEVICE_TOKEN_NO_PAINEL',
    'Authorization: Bearer OBTENHA_O_SEU_TOKEN'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
