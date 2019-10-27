<?php

// $servername = "localhost";
// $dbname = 'aponin';
// $username = "root";
// $password = "";

// Create connection
// $link = new mysqli($servername, $dbname, $username, $password);
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";



$link = mysqli_connect('localhost','root','');
mysqli_select_db($link,'rupshop_apps');

// if ($link) {
// 	echo "Connected";
// }else{
// 	echo "Not Connet";
// }


?> 