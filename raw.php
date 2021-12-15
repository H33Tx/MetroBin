<?php

require_once("core/config.php");
require_once("core/slave.php");

if(empty($_GET["id"])) {
    die("Error: No Paste selected");
} else {
    $id = $_GET["id"];
}

$paste = $conn->query("SELECT * FROM `pastes` WHERE `id`='$id' LIMIT 1");
$paste = mysqli_fetch_assoc($paste);

?>

<plaintext><?= $paste["content"] ?>
