<?php
include_once("config.php");
$username = $_POST['Username'];
$password = $_POST['Password'];


// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);



$result = mysql_query("SELECT * FROM gebuiker WHERE username=$username ")
    or die("failed to query database " . mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
    echo "login succes" . $row['username'];
} else {
    echo "login fail";
}
