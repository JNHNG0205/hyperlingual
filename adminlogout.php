<?php
 session_start();
 session_destroy();
 echo '<script>alert("Successfully Logout!"); window.location.href="adminlogin.php";</script>';
 ?>