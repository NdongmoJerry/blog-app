<?php
session_start();

$host= "localhost";
$dbname= "form";
$username="root";
$password="";

$conn = mysqli_connect($host, $username, $password,$dbname);