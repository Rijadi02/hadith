<?php

function narr_format($str)
{
    $str = ltrim($str, ' ');
    $str = ltrim($str, ',');
    $str = ltrim($str, ' ');
    $str = ucfirst($str);
    return $str;
}


function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        return substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

function hadith_split($hadith, $class)
{
    if(substr_count($hadith,"<p>") > 1)
    {
        $hadith = str_replace_first("<p>", "<p class=\"$class\">", $hadith);
    }
    return $hadith;
}

function al_hadith_split($hadith, $class)
{
    $return_str = "<p class=\"$class\">";

    $hadith = explode('</span>',$hadith)[1];

    //$list = ["transmeton se", "tha:", "tregon se", "transmeton:", "tregon:", "rrëfen:"];
    $list = ["transmeton se", ":", "tregon se"];

    $mylist = [];

    foreach($list as $del)
    {
        $data = explode($del, $hadith);
        $mylist[$del] = strlen($data[0]);
    }

    $del = array_keys($mylist, min($mylist))[0];

    $return_str .= str_replace_first($del,$del." </p> <p>", $hadith);

    echo $return_str;
}

/**
 * Converts a number to its roman presentation.
 **/
function numberToRoman($num)
{
    // Be sure to convert the given parameter into an integer
    $n = intval($num);
    $result = '';

    // Declare a lookup array that we will use to traverse the number: 
    $lookup = array(
        'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
    );

    foreach ($lookup as $roman => $value) {
        // Look for number of matches
        $matches = intval($n / $value);

        // Concatenate characters
        $result .= str_repeat($roman, $matches);

        // Substract that from the number 
        $n = $n % $value;
    }

    return $result;
}


function message($my_msg, $my_msg_type = "success")
{
    global $msg, $msg_type;
    $msg = $my_msg;
    $msg_type = $my_msg_type;
}

function redirect($page)
{
    header('location:' . $page . '');
    exit;
}

function array_random_assoc($arr, $num = 1)
{
    $keys = array_keys($arr);
    shuffle($keys);

    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[$keys[$i]] = $arr[$keys[$i]];
    }
    return $r;
}


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

// function random_request()
// {
//     $array = ['bukhari' => 7563, 'nawawi40' => 42, 'riyadussaliheen' => 1895];

//     $random_obj = array_random_assoc($array);

//     foreach ($random_obj as $key => $value) {
//         $random_hadith = rand(1, $value);
//         print_r([$key => $random_hadith]);
//         $request = sunnah_hadith_request($key, $random_hadith);
//         if (isset(json_decode($request, true)['error'])) {
//             random_request();
//             break;
//         } else {
//             print_r($request);
//             return $request;
//         }
//     }
// }

