<?php

highlight_file(__FILE__);

include("flag.php");

$user = $_GET['user'];
$pass = $_GET['pass'];

if($user == "admin") {
    if($pass != "QNKCDZO" && md5($pass) == md5("QNKCDZO")) {
        die($flag);
    }
}
echo "QQ";
