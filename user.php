<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User</title>
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
        table{
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: #588c7e;
            color: white;
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

    </style>
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Registration</a></li>
        <li><a class="active" href="active">Users</a></li>
        <li ><a href="about.html">Contact</a></li>
    </ul>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'electronic';


    $conn = mysqli_connect($servername, $username, $password, $dbname);



    $sql = "SELECT fname,lname,email from stable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo"<table border=1><tr><th>Name</th><th>email</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["fname"] . " " . $row["lname"] ."</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo " 0 results";
    }

    $conn->close();
    ?>
    <footer>
        <p>&copy; Copyright 2021 Udani Dias</p>
    </footer>

</body>

</html>
