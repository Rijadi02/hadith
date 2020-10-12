<?php
function send_request($url, $key, $auth)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "{}",
        CURLOPT_HTTPHEADER => array(
            $auth . ": " . $key
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return false;
    } else {
        return $response;
    }
}

function sunnah_hadith_request($collection, $number)
{
    return send_request("https://api.sunnah.com/v1/collections/$collection/hadiths/$number", "0ptn7nODK9aBGCo0Iykp6a1FpPlljCaa7yikzW5l", "x-api-key");
}

function sunnah_book_request($collection, $number)
{
    return send_request("https://api.sunnah.com/v1/collections/$collection/books/$number", "0ptn7nODK9aBGCo0Iykp6a1FpPlljCaa7yikzW5l", "x-api-key");
}

function hadithet_hadith_request($collection, $number)
{
    return send_request("https://api.hadithet.com/api/hadeeth/$collection/$number", "Basic MTo2RWNNTVk3WmEySUpDaWVyczd0S2ZFNm1nTUhIa2hqVEtrY25xZW1Y", "Authorization");
}