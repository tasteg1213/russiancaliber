<?php

$default_domen = 'russiancaliber.ru';
$str = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/local/robotstxt/robots.txt');

if($_SERVER['HTTP_HOST'] != $default_domen){
    $str = str_replace($default_domen, $_SERVER['HTTP_HOST'], $str);
}
header('Content-type: text/txt');
echo $str;