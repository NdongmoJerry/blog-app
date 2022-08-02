<?php
session_start();

$host= "localhost";
$dbname= "post";
$username="root";
$password="";

$conn = mysqli_connect($host, $username, $password,$dbname);