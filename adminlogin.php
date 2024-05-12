
<?php
    include("conn.php");
    session_start();
    if(isset($_POST['loginBtn'])){
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $sql = "SELECT * FROM user_admin WHERE 
        admin_name='".$admin_name."' AND
        admin_password='".$admin_password."'";

        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $rowcount = mysqli_num_rows($result);

        if ($rowcount ==1){
            $_SESSION['mySession'] = $row['admin_id'];
            header("location:adminpage");
        }
        else{
            echo"<script>alert('Wrong username/password!');</script>";
        }
        mysqli_close($con);
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        body {
            font-family: "ADLaM Display";
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
        .inputdata{
            width: 480px;
            height: 60px;
            padding: 4px 8px 4px 8px;
            background: #FFFFFF;
            color: #C0C0C0;
            border-color: #232323;
            border-width: 1px;
            border-style: solid;
            border-radius: 13px 13px 13px 13px;
            font-family: "ADLaM Display";
            font-weight: 400;
            font-size: 17px;
            text-align: left;
            margin-left:-100px; 
        }
        .submitbtn{
            height: 50px;
            width:250px;
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
            margin-top: 10px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<div class="header">
    <img style="width: 170px; height: 100px;margin-right:1500px;" src="logo.png" alt="">
</div>
    <div style="width: 550px;
        height: 550px;
        padding: 8px 8px 8px 8px;
        border-color: #201F1E;
        border-width: 0px;
        border-style: solid;
        border-radius: 149px 149px 149px 149px;
        margin-left:650px;
        margin-top:100px;">

        <form method="post">
            <h1 style="margin-left: 70px;">Admin Login</h1>
            <input type="text" name="admin_name" placeholder="Admin Username" class="inputdata" required><br><br>
            <input type="password" name="admin_password" placeholder="password" class="inputdata" required><br><br>

            <input type="submit" name="loginBtn" value="Login" class="submitbtn">
        </form>

</body>

</html>