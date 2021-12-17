<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['create'])) {

    include './dconnect.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];
    $gender = $_POST['gender'];
    $captcha = $_POST['captcha'];


    $sql = "INSERT INTO stable(fname,lname,email,cnumber,gender,captcha)VALUES('$fname','$lname','$email','$cnumber','$gender','$captcha')";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        echo "<script>alert('Data Inseted'); window.open('../user.php','_self')</script>";
    } else {
        echo "<script>alert('Data Not Inseted'); window.open('../','_self')</script>";
    }
} else {
                                                                                                           
    echo "Error" . mysqli_connect_error();
}

?>