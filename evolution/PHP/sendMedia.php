<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://cluster-01.apigratis.com/api/v2/evolution/message/sendMedia',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS =>'{
	    "number": "5531994359434",
	    "options": {
		"delay": 1200,
		"presence": "composing"
	    },
	    "mediaMessage": {
		"mediatype": "image",
		"caption": "This is an example JPG image file sent by Evolution-API via Base64.",
		"media": "your_base_64_encoded_image_here"
	    }
	}',
	CURLOPT_HTTPHEADER => array(
	'Content-Type: application/json',
	'DeviceToken: 1c6f531d-c785-4655-bb70.....',
	'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9......'
	),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
