<?php
    include("conn.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user_name=$_POST['user_name'];
        $user_password=$_POST['user_password'];

        $sql="SELECT*FROM user WHERE user_name='".$user_name."'and user_password='".$user_password."'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        $rowcount=mysqli_num_rows($result);

        if($rowcount==1){
            $_SESSION['mySession']=$row['user_id'];
            header("location:homepage.php");
        }
        else{
            echo'<script>alert("Your Username or Password is invalid. Please re login");</script>';
        }
        mysqli_close($con);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="script.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
    @import url("https://fonts.googleapis.com/css?family=Assistant:400,700|Playfair+Display:900");
        .box {
            width: 1924px;
            height: 100px;
            padding: 8px 8px 8px 8px;
            background: #0683FD;
            border-color: #FFFFFF;
            border-width: 1px;
            border-style: solid;
            padding:0;
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
        .btn {
            width: 100px;
            height: 50px;
            padding: 8px 8px 8px 8px;
            background: #037AFF;
            color: #FFFFFF;
            border-color: #006CE5;
            border-width: 1px;
            border-style: solid;
            border-radius: 39px 39px 39px 39px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 20px;
            line-height: 1.3;
            text-align: center;
            margin-top: 15px;
            margin-left: 110px;
        }
        .text-input-username {
            width: 480px;
            height: 60px;
            padding: 4px 8px 4px 8px;
            background: #FFFFFF;
            color: black;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            border-radius: 13px 13px 13px 13px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 17px;
            text-align: left;
            margin-left:30px; 
        }
        .logoimg{
            width:200px;
            height: 100px;
        }

        .headertext {
            color: #ffffff;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 24px;
            text-decoration: none;
            text-align: right;
            margin-left: 20px;
            margin-right: 13px;
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
        .link_forgotps{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left:70px;
            margin-top:2px;
            font-family:'ADLaM Display';
        }
        
        @import url("https://fonts.googleapis.com/css?family=Assistant:400,700|Playfair+Display:900");

        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        :root {
            --clr-light: #97d5ea;
            --clr-dark: #293f81;
            --clr-primary: #d0d781;
            --clr-secondary: #239a84;
            --clr-accent: #0864c7;

        --foreground: var(--clr-dark);
        --background: var(--clr-light);

        --ff-title: "Playfair Display", serif;
        --ff-body: "Assistant", sans-serif;
        }

        .darkmode {
            --clr-light:  #74cac6;
            --clr-dark: #032ea5;
            --clr-primary: #6d7420;
            --clr-accent: #55ccea;
        
            --foreground: var(--clr-light);
            --background: var(--clr-dark);
        }


        body {
        background: var(--background);
        color: var(--foreground);
        font-family: var(--ff-body);
        font-size: 18px;
        line-height: 1.6;
        }
        /*"login"text*/
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
        /*login box*/
        .loginbox {
        display: grid;
        background: linear-gradient(120deg, var(--clr-primary), var(--clr-secondary));
        align-content: center;
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
        margin-top:10px;
        margin-right:10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img style="width: 170px; height: 100px; margin-right:40px;" src="logo.png" alt="">
        <div>
            <a href="homepagebeforelogin.php" style="margin-left: 900px;" class="headertext">Home</a>  
            <div class="dropdown">
                <a href="" class="headertext">About Us</a>
                <div class="dropdown-content">
                    <a href="aboutusbeforelogin.php">Mission & Approach</a>
                    <a href="contactus_without.php">Contact Us</a>
                </div>
            </div>
 
            <div class="dropdown">
                <a href="" class="headertext">Settings</a>
                <div class="dropdown-content">
                    <a href="#">Toggle DarkMode<button id="dark-mode-toggle" class="dark-mode-toggle" aria-label="toggle dark mode" onclick="darkMode()">
                    <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496" style="opacity:50% "><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
    
        <div class="loginbox" style="width: 550px;
            height: 550px;
            padding: 8px 8px 8px 8px;
            border-color: #201F1E;
            border-width: 0px;
            border-style: solid;
            border-radius: 149px 149px 149px 149px;
            margin-left:460px;
            margin-top:60px;">
        <h3 class="h1" style="margin-left:190px;width: 1px; height: 80px; font-family: 'ADLaM Display'; font-weight: 600; font-size: 60px; text-align: left;">Login</h3>
            <form method="post">
            <input type="text" name="user_name" placeholder="Username"style="text-overflow:unset;" class="text-input-username" required>
            <br>
            <br>
            <input type="password" name="user_password" placeholder="Password" class="text-input-username" required>
                <div class="btn-group"> 
                    <input type="submit" name="loginBtn" value="Login" class="btn-accent" style="width: 100px;
                        height: 50px;
                        padding: 8px 8px 8px 8px;
                        color:#202831;
                        border-color: #006CE5;
                        border-width: 1px;
                        border-style: solid;
                        border-radius: 39px 39px 39px 39px;
                        font-family: 'ADLaM Display';
                        font-weight: 400;
                        font-size: 20px;
                        line-height: 1.3;
                        text-align: center;
                        margin-top: 15px;
                        margin-left: 110px;">
                    <input type="reset" name="Reset" class="btn-accent" style="width: 100px;
                        height: 50px;
                        padding: 8px 8px 8px 8px;
                        color:#202831;
                        border-color: #006CE5;
                        border-width: 1px;
                        border-style: solid;
                        border-radius: 39px 39px 39px 39px;
                        font-family: 'ADLaM Display';
                        font-weight: 400;
                        font-size: 20px;
                        line-height: 1.3;
                        text-align: center;
                        margin-top: 15px;
                        margin-left: 110px;">
                </div>
            </form>
            <div class="link_forgotps">
                <p style="margin-left:-20px;">Don't have an account?<br><a href="register.php" style="margin-left:60px;">Register</a></p>
                <a href="sendOTP.php" style="margin-top:32px; margin-right:30px;">Forgot password?</a></p>
            </div>
        </div>
    </div>
    <script src="darkmode.js"></script>
</body>
</html>