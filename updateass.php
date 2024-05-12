<?php
include("session.php");
include("conn.php");

$sql="UPDATE user SET
user_name='$_POST[user_name]',
user_dob='$_POST[user_dob]',
user_email='$_POST[user_email]',
user_gender='$_POST[user_gender]',
user_phone='$_POST[user_phone]',
user_occupation='$_POST[user_occupation]',
user_country='$_POST[user_country]',
user_payment='$_POST[user_payment]'

WHERE user_id=".$_SESSION['mySession'];

if(mysqli_query($con,$sql)){
    mysqli_close($con);
    header('Location:setting.php');
    
}
?>