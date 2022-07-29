<?php
session_start();

$host= "localhost";
$dbname= "registration";
$username="root";
$password="";

$conn = mysqli_connect($host, $username, $password,$dbname);