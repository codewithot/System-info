<?php
$server = [
    'host server name' => $_SERVER['SERVER_NAME'],
    'server software' => $_SERVER['SERVER_SOFTWARE'],
    'document root' => $_SERVER['DOCUMENT_ROOT'],
    'current page' => $_SERVER['PHP_SELF'],
    'absolute path' => $_SERVER['SCRIPT_FILENAME']

];
$client= [
    'client system info' => $_SERVER['HTTP_USER_AGENT'],
    'client ip' => $_SERVER['REMOTE_ADDR'],
    'remote port' => $_SERVER['REMOTE_PORT']

];

// print_r ($client);
?>