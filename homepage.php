<?php 
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="script.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        h1{
            color:black;
            font-family: "ADLaM Display";
            font-size: 50px;
            text-align: left;
            margin-top:10px;
            
        }
        h2{
            color: #a9a9a9;
            font-family: "ADLaM Display";
            font-weight: 700;
            font-size: 30px;
            text-align: left;
        }
        p{
            font-family: "ADLaM Display";
            font-weight: 700;
            font-size: 30px;
            text-align: left;
        }
        button{
            width: 300px;
            height: 70px;
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
        button:hover {
            background-color: #3e8e41;
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
            height: 90px;
            background: #0683fd;
            border-color: #0683fd;
            border-width: 1px;
            border-style: solid;
        }
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
            font-family: "ADLaM Display";
        }
 
        .dropdown-content a:hover{
            background-color: #ddd;
        }
 
        .dropdown:hover .dropdown-content{
            display:block;
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
            height: 70px;
            margin-top:10px;
            margin-right:-13px;
        }
        .upper {
            background: var(--background);
            color: var(--foreground);
            width:100px;
            height:100px;
        }
        
    </style>
</head>

<body>
<div class="header">
        <img style="width: 170px; height: 100px; margin-right:40px;" src="logo.png" alt="">
        <div>
            <a href="homepage.php" style="margin-left: 630px;" class="headertext">Home</a>  
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
<h1>Welcome to</h1>
<h1>HyperLingual</h1>
<h2>Your Gateway to Multilingual Mastery</h2>
<p>Hello,user<p>
<p>Are you ready to start your learning today?</p>
<button onclick="window.location.href='course.php'">Start Quiz</button>





</body>
</html>