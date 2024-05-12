<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="script.js"></script>
    <link rel="stylesheet" href="mp.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        .dropdown{
            position: relative;
            display: inline-block;
        }

        .dropdown-content{
            display:none;
            position:absolute;
            background-color: #f9f9f9;
            min-width:160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'ADLaM Display';
        }

        .dropdown-content a:hover{
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content{
            display:block;
        }
        .headertext {
            color: #ffffff;
            font-family: 'ADLaM Display';
            font-weight: 400;
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
            border-color: #0683fd;
            border-width: 1px;
            border-style: solid;
        }
        .title {
            width: 800px;
            height: 300px;
            font-family: 'ADLaM Display';
            font-weight: 900px;
            font-size: 55px;
            text-align: left;
            margin-left:580px;
        }
        .subtitle{
            width: 5px;
            height: 300px;
            font-family: 'ADLaM Display';
            font-weight: 900px;
            font-size: 30px;
            text-align: left;
        }
        .subtitle1{
            width: 5px;
            height: 300px;
            font-family: 'ADLaM Display';
            font-weight: 900px;
            font-size: 30px;
            text-align: left;
            margin-left:700px;
            margin-top:-230px;
        }
        .map{
        	width: 300px;
            height: 327px;
            margin-top:-250px;
        }
        .phone{
            width: 240px;
            height: 453px;
            border-color: #AAAAAA;
            border-width: 0px;
            border-style: solid;
            margin-top:-270px;
        }
        .btn {
            width: 150px;
            height: 50px;
            padding: 8px 8px 8px 8px;
            background: #037AFF;
            border-color: #006CE5;
            border-width: 1px;
            border-style: solid;
            border-radius: 39px 39px 39px 39px;
            font-family: 'ADLaM Display';
            font-weight: 400;
            font-size: 20px;
            line-height: 1.3;
            text-align: center;
            margin-top: -15px;
            margin-left: 1180px;
            background: var(--clr-accent);
            color: var(--foreground);
        }
        h4{
            background-image:url('email.png');
            background-repeat: no-repeat;
            text-align:left;
        }

        
        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        :root {
            --clr-light: #97d5ea;/*the backgroung color*/
            --clr-dark: #4b61a3;/*the color of the word*/
            --clr-primary: #d0d781;
            --clr-accent: #0864c7;
        --foreground: var(--clr-dark);
        --background: var(--clr-light);
        }

        .darkmode {
            --clr-light:  #74cac6;/*the color of the word*/
            --clr-dark: #546fb9;/*the backgrounf color*/
            --clr-primary: #6d7420;
            --clr-accent: #55ccea;
            --foreground: var(--clr-light);
            --background: var(--clr-dark);
        }


        body {
        background: var(--background);
        color: var(--foreground);
        }
        /*"topic"text*/
        h1 {
        font-family: "ADLaM Display";
        }

        .btn-group {
        display: relative;
        }

        .btn {
        text-decoration: none;
        text-transform: uppercase;
        border-radius: 5px;
        position: relative;
        display: inline-block;
        line-height: 1;
        }

        .btn + .btn {
        margin-left: 1em;
        }


        .btn-accent {
        background: var(--clr-accent);
        color: var(--foreground);
        }

        .btn::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border: var(--foreground) 2px solid;
        left: -4px;
        top: 4px;
        border-radius: inherit;
        z-index: -1;
        }

        .intro > * {
        grid-column: 2 / 3;
        }
        /*the button*/
        .dark-mode-toggle {
        position: absolute;
        z-index: 100;
        top: 1em;
        right: 1em;
        color: var(--foreground);
        border: 0px solid currentColor;
        padding: 4px;
        background: transparent;
        cursor: pointer;
        border-radius: 5px;
        width: 30px;
        height: 20px;
        margin-top:50px;
        margin-right:10px;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <img style="width: 170px; height: 100px; margin-right:60px;" src="logo.png" alt="">
        <div>
            <a href="homepage.php" style="margin-left: 620px;" class="headertext">Home</a>  
            <div class="dropdown">
                <a href="" class="headertext">About Us</a>
                <div class="dropdown-content">
                    <a href="aboutus.php">Mission & Approach</a>
                    <a href="pricing.php">Pricing</a>
                    <a href="contactus.php">Contact Us</a>
                </div>
            </div>
        
            <a href="course.php" class="headertext">Courses</a>
            <div class="dropdown">
                <a href="" class="headertext">Settings</a>
                <div class="dropdown-content">
                    <a href="setting.php">Manage Profile</a>
                    <a href="#">Toggle DarkMode<button id="dark-mode-toggle" class="dark-mode-toggle" aria-label="toggle dark mode" onclick="darkMode()">
                    <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496" style="opacity:50% "><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>
                    </button></a>
                </div>
            </div>
            <a href="logout.php" class="headertext">Logout</a>
        </div>
    </div>
    
    <h2 class="title">Get in touch</h2>
        <h3 class="subtitle" style="margin-left:190px; margin-top:-260px;">Address</h3>
            <img class="map" style="margin-left:105px; float: left; " src="mp.png" alt="">
        <h3 class="subtitle1">Phone</h3>
            <img class="phone" style="margin-left:627px; float: left; " src="phn.png" alt="">
        <h3 class="subtitle" style="margin-left:1185px; margin-top:-425px;">Email</h3>
        <h4 style="
                margin-left: 1060px;
                margin-top:-250px;
                font-size: 27px;
                height: 270px;
                width: 500px;
                padding-left: 30px;
                background-size: 350px;
                padding-bottom: 0px;
                margin-bottom: 0px;
                padding-top: 120px;
                ">hyperlingual@gmail.com</h4>
        <input type="submit" name="loginBtn" value="Contact Us" class="btn" style="margin-left: 758px; margin-top:5px; color:#202831;">
    <script src="darkmode.js"></script>
</body>
</html>