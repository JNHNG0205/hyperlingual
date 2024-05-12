<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

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

        
    </style>
</head>

<body>

<div class="header">
    <img style="width: 170px; height: 100px; margin-right:450px;" src="logo.png" alt="">
        <div>
            <a href="" style="margin-left: 630px;" class="headertext">Home</a>  
            <div class="dropdown">
                <a href="" class="headertext">About Us</a>
                <div class="dropdown-content">
                    <a href="aboutusbeforelogin.php">Mission & Approach</a>
                    <a href="contactus_without.php">Contact Us</a>
                </div>
            </div>
            
        </div>
    </div>
<h1>Welcome to</h1>
<h1>HyperLingual</h1>
<h2>Your Gateway to Multilingual Mastery</h2>
<p>Hello,user<p>
<p>Are you ready to start your learning today?</p>
<button onclick="document.location='login.php'">Login</button>
<button onclick="document.location='register.php'">Register</button>




</body>
</html>