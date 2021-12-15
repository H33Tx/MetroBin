<?php

// Main Configuration
$config["name"] = "MetroBin";
$config["domain"] = "http://localhost/";
$config["folder"] = "public/";
$config["lang"] = "en"; // WIP

// MySQLi Database
$slave["host"] = "localhost";
$slave["user"] = "root";
$slave["pass"] = "root";
$slave["tale"] = "metrobin";

// DO NOT EDIT BELOW! (or u wanna break me?)
$url = $config["domain"].$config["folder"];
$name = $config["name"];
if(!isset($_GET["page"])) {
    $rPage = "paste";
} elseif(empty($_GET["page"])) {
    $rPage = "paste";
} else {
    $rPage = $_GET["page"];
}

?>
