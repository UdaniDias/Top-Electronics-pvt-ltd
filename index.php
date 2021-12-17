<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOME</title>
    </head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
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
            padding: 14px 14px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
        .banner{
            background-color:gainsboro;
            height:500px;
            padding-top: 0px;
        }
        body{
            background-image: url('image/cover1.jpg');
            background-repeat: no-repeat;
            width:auto; 
            background-size:cover;
        }
        .container{
		width: 100%;
		padding: 20px;
		margin: 100px auto;	 
		display: flex;
		flex-direction: row;
		justify-content: center;
	}
	

	.box{
		width: 250px;
		margin: 0 10px;
		box-shadow: 10px 2px 10px 2px rgba(0, 0, 0, 0);
		transition: 1s;

	}
	.box img{
		display: block;
		width:100%;
		border-radius: 5px;
	}
	.box:hover{
		transform: scale(1.3);
		z-index: 2;
	}
        h1{
            color:white;
        }
       .para p {
            color: white;
            text-align:center;
            font-size: 20px;
            font-family: "Lucida Console", "Courier New", monospace;
            font-style: oblique;
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
            text-align: center;
    
        }
        .banner-text{
            text-align: center;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
          
        }

    </style>
</head>
<body>

    <ul>
        <li><a class="active" href="active">Home</a></li>
        <li><a href="register.php">Registration</a></li>
        <li><a href="user.php">Users</a></li>
        <li ><a href="about.html">Contact</a></li>
    </ul>

    <div class="container">
		<div class="box">
			<img src="image\circuit.jpg">
		</div>
		<div class="box">
			<img src="image\devices.jpg">
		</div>
		<div class="box">
			<img src="image\phones.jpg">
		</div>
		<div class="box">
			<img src="image\hardware.jpg">
		</div>
		<div class="box">
			<img src="image\watch.jpg">
		</div>
	</div>

  <div class="body">
        <div class="banner-text">
            <h1>TOP Electronic Pvt Ltd</h1>
        </div>

        <div class="para">
<p>Top Electronics is the first cheap electronics website on the list stuck to its real purpose. It only offers electronic items, nothing else. Of course, it also has physical stores around the Country.

There are several broad categories on the site, including Laptops, Desktops, Processors, Networking, SSDs, and Computer Cases and manymore.
<br>
<p> Each is packed with deals.You can also use the site to pick up great deals on refurbished devices and open-box products.</p>
 <p>Almost every item on the site has a discount.Overnight shipping is available in and around Colombo.</div>




    <footer>
        <p>&copy; Copyright 2021 Udani Dias</p>
    </footer>

</body>

</html>