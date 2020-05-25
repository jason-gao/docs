<?php

## php getHtml.php fileUpload https://www.anquanke.com/post/id/164561

$filename = date("YmdHi");

$suffix = ".html";

if(isset($argv[1]) && $argv[1]){
	$filename = $argv[1];
}

$url = "https://www.anquanke.com/post/id/164561";

if(isset($argv[2]) && $argv[2]){
	$url = $argv[2];
}

$contents = file_get_contents($url);

file_put_contents($filename.$suffix, $contents);


