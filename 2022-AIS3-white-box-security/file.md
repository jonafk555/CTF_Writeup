<?php

highlight_file(__FILE__);

$file1 = $_GET['f1'];
$file2 = $_GET['f2'];

if(preg_match("/\'|\"|;|,|\`|\*|\\|\n|\t|\r|\xA0|\{|\}|\(|\)|<|\&[^\d]|@|\||ls|cat|sh|flag|find|grep|echo|w/is", $file1))
    $file1 = "";
if(preg_match("/\'|\"|;|,|\`|\*|\\|\n|\t|\r|\xA0|\{|\}|\(|\)|<|\&[^\d]|@|\||ls|cat|sh|flag|find|grep|echo|w/is", $file2))
    $file2 = "";

$file1 = '"' . $file1 . '"';
$file2 = '"' . $file2 . '"';

$cmd = "file $file1 $file2";
system($cmd);
cannot open `' (No such file or directory) cannot open `' (No such file or directory)
