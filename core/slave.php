<?php

$conn = new mysqli($slave["host"], $slave["user"], $slave["pass"], $slave["tale"]);

// Check connection
if ($conn->connect_error) {
  die("MySQLi conncection failed: " . $conn->connect_error);
} 

?>
