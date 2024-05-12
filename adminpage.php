<?php
    include("adminsession.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');

        body {
            font-family: "ADLaM Display";
        }
        a{
            margin-left: 200px;
            color:black;
            
        }
        button{
            width: 300px;
            height: 250px;
            padding: 0px 10px 0px 10px;
            background: #0683FD;
            color: #FFFFFF;
            border-color: #0683FD;
            border-width: 1px;
            border-style: solid;
            border-radius: 35px 35px 35px 35px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 30px;
            text-align: center;
        }
        .headertext {
        color: #ffffff;
        font-family: "ADLaM Display";
        font-weight: 200;
        font-size: 24px;
        text-decoration: none;
        text-align: right;
        margin-left: 20px;
        margin-right: 20px;
        }
        
        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: auto;
            height: 100px;
            background: #0683fd;
            border-color: #ffffff;
            border-width: 1px;
            border-style: solid;
        }
    </style>
</head>
<body>
<div class="header">
    <img style="width: 170px; height: 100px;margin-right:1400px;" src="logo.png" alt="">
    <div>
        <a href="adminlogout.php"class="headertext">Logout</a>
    </div>
</div>
<h1>Quick Access</h1>
<button onclick="document.location='addquestion.php'">Add Quiz</button>
</body>
</html>