<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'electronic';


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    die('error'.mysqli_connect_error());
} 
{
    echo 'Connectionn success';
}
?>
