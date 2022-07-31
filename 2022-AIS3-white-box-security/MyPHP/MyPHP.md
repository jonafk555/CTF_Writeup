<?php
highlight_file(__FILE__);

include("user.php");
// $users = Array('admin'=>'xxxx', ...)

$user = $_GET['user'];
$pass = $_GET['pass'];

if(isset($user) && isset($pass)) {
    if($users[$user] === sha1($pass))
        echo $flag;
    else
        echo "Q______________Q";
}
