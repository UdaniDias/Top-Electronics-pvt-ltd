<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Form</title>
    </head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:black;
        }

        li {
            float: left;
            border-right:1px solid #bbb;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
        
        
        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color:black;
            text-align: center;
        }

        footer p{
            color:white;
        } 
        img{
            width:200px;
            height: 100px;
        }
        form {
            margin: 0 auto;
            width: 500px;
            padding: 1em;
            /* border: 1px solid #ccc; */
            border-radius: 1em;
        }

        fieldset {
            width: 360px;
        }
        button {
            margin-left: .5em;
            width: 100px;
            height: 40px;
            text-align: center;
            border-radius: 10px;
        }
        body{
            background-color: #bbb;
        }


    </style>
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="active">Registration</a></li>
        <li><a href="user.php">Users</a></li>
        <li ><a href="about.html">Contact</a></li>
    </ul>


    <form action="php/create.php" method="POST">
        <h2>User Registration Form</h2>
        First_Name :
        <input type="text" name="fname" required>
        <br>
        <br>
        Last_Name :
        <input type="text" name="lname" required>
        <br>
        <br>
        Email:
        <input type="text" name="email"required>
        <br>
        <br>
        Mobile Number:
        <input type="Number" name="cnumber"required>
        <br>
        <br>
        Gender :
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <br>
        <br>
        <fieldset>
            <legend>CAPTCHA</legend>
            <P>This question is for testing whether you are a human visitor and to prevent automated spam submissions.</P>
            <img src="image/chptcha.jpg">
            <br>
            <br>
            Enter the characters shown in the image
            <input type ="text" name="captcha" required>
        </fieldset>
        <br>
        <button type ="Submit" name="create" value="Submit">Submit</button>
        <button type ="Reset" name="reset" value="Reset">Reset</button>
    </form>
    <footer>
        <p>&copy; Copyright 2021 Udani Dias</p>
    </footer>

</body>

</html>
