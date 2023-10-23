<?php
highlight_file(__FILE__);
include("config.php");

$conn = mysql_connect($host, $dbuser, $dbpass) or die('connection failed');
mysql_query("SET NAMES utf-8");
mysql_select_db("news");

$user = $_GET['user'];
$pass = $_GET['pass'];

if(strlen($user) > 4) die('toooooo long!');
if(strlen($pass) > 4) die('toooooo long!');

$res = mysql_query("SELECT * FROM user WHERE username='" . $user . "' and password='" . $pass . "'");

$res = mysql_fetch_array($res);

if($res) echo $flag;
else echo "QAQQQQQQ";
