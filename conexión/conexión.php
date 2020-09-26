<?php
$mysqli = @new mysqli('localhost', 'root', '', 'auto4sell');

if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
?>