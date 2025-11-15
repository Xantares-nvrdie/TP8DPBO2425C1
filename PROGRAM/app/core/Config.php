<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$folder = rtrim(dirname($_SERVER['SCRIPT_NAME']), "/") . "/";

define("BASEURL", $protocol . $host . $folder);
