<?php

highlight_file(__FILE__);
include("config.php");

$conn = mysqli_connect($host, $dbuser, $dbpass, "news") or die('connection failed');

$id = $_POST['id'];

if(preg_match('/select.+?from/is', $id))
    die("Bad Hacker!");

$res = mysqli_query($conn, "SELECT * FROM info WHERE id='" . $id . "'");

var_dump($res);

echo "<hr>";
if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    var_dump($row);
} else {
    echo "Q___________Q";
}

object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(3) ["lengths"]=> NULL ["num_rows"]=> int(0) ["type"]=> int(0) }
Q___________Q
