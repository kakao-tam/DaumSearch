<?php

 $url = "https://dapi.kakao.com/v2/search/web?query=test";
 $REST_API_KEY = "444444444444444444444444444444444444"; 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_POST, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 $header = "KakaoAK ".$REST_API_KEY; 
 $headers = array();
 $headers[] = "Authorization: ".$header;
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
 $res = curl_exec ($ch);
 $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
 curl_close ($ch);
 
 var_dump($res); // Kakao API 서버로 부터 받아온 값
     
 
?>
