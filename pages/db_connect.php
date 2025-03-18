<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP-এ ডিফল্ট ফাঁকা
$dbname = "myshop_db";

// সংযোগ তৈরি
$conn = mysqli_connect($servername, $username, $password, $dbname);

// সংযোগ চেক
if (!$conn) {
    die("সংযোগ ব্যর্থ: " . mysqli_connect_error());
}
?>