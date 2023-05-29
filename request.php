<?php
include 'connect.php';

$requset = trim($_GET['input-link']);
$requset = mysqli_real_escape_string($conn, $requset);

if (isset($_GET['input-link'])) {
    $search_bool = false;
    $token = '';

    while (!$search_bool) {
        $token = token_gen();
        $sel = mysqli_query($conn, "SELECT * FROM `links` WHERE `token` = '".$token."'");

        if (!mysqli_num_rows($sel)) {
            $search_bool = true;
        }
    }

    if ($search_bool) {
        $ins = mysqli_query($conn, "INSERT INTO `links` (`link`, `token`) VALUES ('".$requset."','".$token."')");

        if ($ins) {
            $_GET['input-link'] = $_SERVER['SERVER_NAME'].'/'.$token;
            //echo "Ссылка добавлена";
        } else {
            //echo "Ссылка не добавлена";
        }
    } else {
        //echo "Все плохо";
    }
} else {
    $URI = $_SERVER['REQUEST_URI'];
    $token = substr($URI, 1);

    if (iconv_strlen($token)) {

        $sel = mysqli_query($conn, "SELECT * FROM `links` WHERE `token` = '".$token."'");

        if (mysqli_num_rows($sel)) {
            $row = mysqli_fetch_assoc($sel);

            header("Location: " . $row['link']);
        } else {
            die("Ошибка токена");
        }
    }
}

function token_gen($min = 5, $max = 8) {

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDFEGHIJKLMNOPRSTUVWXYZ0123456789';
    $new_chars = str_split($chars);

    $token = '';
    $rand_end = mt_rand($min, $max);

    for ($i = 0; $i < $rand_end; $i++) {
        $token .= $new_chars[ mt_rand(0, sizeof($new_chars) - 1) ];
    }

    return $token;
}

function validateURL($requset) {

    $pattern_1 = "/^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i";

    $pattern_2 = "/^(www)((\.[A-Z0-9][A-Z0-9_-]*)+.(com|org|net|dk|at|us|tv|info|uk|co.uk|biz|se)$)(:(\d+))?\/?/i";

    if(preg_match($pattern_1, $requset) || preg_match($pattern_2, $requset)){

      return true;

    } else{

      return false;

    }

}
