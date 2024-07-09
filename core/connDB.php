<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/hien/app/core/variable.php');

$db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($db->connect_error){
    die("Connect failed: ".$db->connect_error);
}

$t = "test";

?>