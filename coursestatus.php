<?php
    include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperLingual | Course Status</title>
    <script src="script.js"></script>
    <link rel="icon" type="image/x-icon" href="icon1.png">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap");

        body {
        height: 1500px;
        font-family: "ADLaM Display";
        }

        .coursebutton {
        width: 286px;
        height: 500px;
        padding: 0px 10px 0px 10px;
        background: #ffffff;
        border-color: #000000;
        border-width: 1px;
        border-style: solid;
        border-radius: 24px 24px 24px 24px;
        font-family: "ADLaM Display";
        font-weight: 700;
        font-size: 30px;
        text-align: center;
        float: left;
        margin-right: 30px;
        margin-left: 140px;
        margin-bottom: 30px;
        display: grid;
        background: linear-gradient(120deg, var(--clr-primary), var(--clr-secondary));
        align-content: center;
        }

        .coursetext {
        width: 177px;
        height: 117px;
        color: #232323;
        font-family: "ADLaM Display";
        font-weight: 400;
        font-size: 30px;
        text-align: center;
        }

        .coursestatustext {
        width: 177px;
        height: 117px;
        font-family: "ADLaM Display";
        font-weight: 400;
        font-size: 48px;
        text-align: center;
        float: left;
        margin-left: 20px;
        }

        .courseimg {
        width: 182px;
        height: 183px;
        background: #00000000;
        margin-bottom: 20px;
        margin-left: 40px;
        }

        .coursestatusimg {
        width: 182px;
        height: 183px;
        background: #00000000;
        margin-left: 170px;
        float: left;
        }

        .headertext {
        color: #ffffff;
        font-family: "ADLaM Display";
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
        margin-bottom: 20px;
        }

        .courseheading {
        width: auto;
        height: 55px;
        font-family: "ADLaM Display";
        font-weight: bold;
        font-size: 48px;
        }

        .coursestatusheading {
        width: auto;
        height: 55px;
        font-family: "ADLaM Display";
        font-weight: bold;
        font-size: 48px;
        margin-bottom: 50px;
        }

        .wrapper {
        width: 1500px;
        box-sizing: border-box;
        margin-left: 80px;
        }

        /* Dropdown container */
        .dropdown {
        position: relative;
        display: inline-block;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-family: "ADLaM Display";
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
        background-color: #ddd;
        }

        /* Show the dropdown content when hovering over the dropdown link */
        .dropdown:hover .dropdown-content {
        display: block;
        }

        .progress-container {
        width: 500px;
        height: 150px;
        margin-top: 20px; /* Adjust as needed */
        margin-left: 20px;
        }

        .course-info {
        display: inline-block;
        vertical-align: top;
        margin-right: 20px; /* Adjust as needed */
        }

        .progress-bar {
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
        height: 50px;
        }

        .progress-bar-inner {
        background-color: #0683fd;
        border-radius: 20px;
        text-align: center;
        color: white;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
        font-family: "ADLaM Display";
        }

        .leveltext {
        font-family: "ADLaM Display";
        margin-bottom: 10px;
        font-size: 36px;
        }

        .pricing-heading {
        width: 400px;
        height: 75px;
        font-family: "ADLaM Display";
        font-weight: bold;
        font-size: 40px;
        text-align: center;
        }

        .pricing-container {
        width: 1500;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "ADLaM Display";
        }

        .container-blue {
        width: 500px;
        border-radius: 10px;
        border-style: solid;
        text-align: center;
        border-color: #0683fd;
        margin-right: 100px;
        }

        .container-gold {
        width: 500px;
        border-radius: 10px;
        border-style: solid;
        text-align: center;
        border-color: gold;
        float: left;
        margin-left: 100px;
        }

        .pricing-container-header-blue {
        background-color: #0683fd;
        color: #ffffff;
        font-size: 48px;
        width: 495px;
        }

        .pricing-container-header-gold {
        background-color: gold;
        color: #ffffff;
        font-size: 48px;
        width: 495px;
        }

        .pricing-text {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
        }

        .material-symbols-outlined {
        margin-left: 10px;
        color: rgb(28, 198, 28);
        font-size: x-large;
        }

        .subscribe-button {
        width: 200px;
        height: 70px;
        background: #0683fd;
        color: #ffffff;
        border-color: #0683fd;
        border-width: 1px;
        border-style: solid;
        border-radius: 30px;
        font-family: "ADLaM Display";
        font-weight: 400;
        font-size: 36px;
        text-align: center;
        margin-bottom: 20px;
        }

        *,
        *::before,
        *::after {
        box-sizing: border-box;
        }

        :root {
        --clr-light: white;
        --clr-dark: black;
        --clr-primary: white;
        --clr-secondary: white;
        --clr-accent: #ff7750;

        --foreground: var(--clr-dark);
        --background: var(--clr-light);

        --ff-title: "Playfair Display", serif;
        --ff-body: "Assistant", sans-serif;
        }

        .darkmode {
        --clr-light: white;
        --clr-dark: black;
        --clr-primary: black;
        --clr-secondary: white;
        --clr-accent: #ff7750;

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

        h1 {
        font-size: calc(3rem + 7vw);
        font-family: var(--ff-title);
        margin: 0 0 0.25em;
        line-height: 1;
        }

        .subtitle {
        max-width: 600px;
        }

        .intro {
        height: 80vh;
        padding: 10em 0;
        display: grid;
        grid-template-columns: minmax(2em, 1fr) minmax(80vw, 860px) minmax(2em, 1fr);
        background: linear-gradient(120deg, var(--clr-primary), var(--clr-secondary));
        align-content: center;
        }

        .intro > * {
        grid-column: 2 / 3;
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
        height: 20px;
        margin-top:90px;
        margin-right:10px;
        }

        .click-here {
        width: 100px;
        right: 1.5em;
        position: absolute;
        top: 3em;
        }
        
        
        .input-box {
            font-family: 'ADLaM Display';
            font-size: 24px;
            padding: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            margin-left: 30px;
        }

        .submit-button {
        width: 200px;
        font-size: 24px;
        height:50px;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: "ADLaM Display";
        margin-top: 20px;
        margin-left: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img style="width: 170px; height: 98px;" src="logo.png" alt="">
        <div>
            <a href="homepage.php" style="margin-left: 670px;" class="headertext">Home</a>  
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

    <div>
        <h1 class="coursestatusheading">Course Status</h1>
        <div class="course-info">
            <?php
                include("conn.php");
                $sql = "SELECT * FROM course";
                $result = mysqli_query($con, $sql);
                $img = ['English'=>'uk.png', 'Japanese'=>'japan.png', 'Spanish'=>'spain.png', 'Malay'=>'malaysia.png', 'Chinese'=> 'china.png', 'French'=> 'france.png'];

                if (isset($_GET['lang'])) {
                    
                    foreach ($img as $l => $i){
                        if ($l == $_GET['lang'] ) {
                            echo '<img class="coursestatusimg" src="'.$i.'">';
                        }   
                    }
                    while ($row = mysqli_fetch_array($result)) {
                        if ($row['course_name'] == $_GET['lang']){
                            echo '<p class="coursestatustext">'.$row['course_name'].'</p>';
                        }
                    }
                } 
            ?>  
        </div>
    </div>
    
    
    <?php
    include("conn.php");

    $lang = $_GET['lang'];
    $course_id = 0;

    if ($lang == 'English'){
        $course_id = 1;
    } else if ($lang == 'Japanese') {
        $course_id = 2;
    } else if ($lang == 'Spanish') {
        $course_id = 3;
    } else if ($lang == 'Malay') {
        $course_id = 4;
    } else if ($lang == 'Chinese') {
        $course_id = 5;
    } else if ($lang == 'French') {
        $course_id = 6;
    }
    ?>

    <div>
        <p style="font-family:'ADLaM Display';font-size:24px;">Beginner Quiz <button class="submit-button" onclick="b_quizRedirect('<?php echo $lang; ?>', 'Beginner')">Start</button></p>
        <p style="font-family:'ADLaM Display';font-size:24px;">Intermediate Quiz <button class="submit-button" onclick="i_quizRedirect('<?php echo $lang; ?>', 'Intermediate')">Start</button></p>
        <p style="font-family:'ADLaM Display';font-size:24px;">Advanced Quiz <button class="submit-button" onclick="a_quizRedirect('<?php echo $lang; ?>', 'Advanced')">Start</button></p>  
    </div>

    <script>
        function b_quizRedirect(lang, level) {
            window.location.href = "beginnerquiz.php?quiz=" + lang + level;
        }

        function i_quizRedirect(lang, level) {
            window.location.href = "intermediatequiz.php?quiz=" + lang + level;
        }

        function a_quizRedirect(lang, level) {
            window.location.href = "advancedquiz.php?quiz=" + lang + level;
        }
    </script>
    
    <?php
    $sql3 = "SELECT * FROM user_progress INNER JOIN quiz ON user_progress.quiz_id = quiz.quiz_id WHERE user_id= ".$_SESSION['mySession']." AND quiz.course_id=$course_id GROUP BY user_progress.quiz_id";

    $result3 = mysqli_query($con, $sql3);

    $i = 1;

    while ($row3 = mysqli_fetch_array($result3)){
        if (mysqli_num_rows($result3) > 0 ){
            $sql2 = "SELECT quiz_id, COUNT(*) AS total_questions, SUM(score) AS total_score FROM user_progress WHERE user_id= ".$_SESSION['mySession']."  AND quiz_id=".$row3['quiz_id'];

            $result2 = mysqli_query($con, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $total_questions = $row2['total_questions'];
            $total_score = $row2['total_score'];

            // Calculate the percentage completion
            $percentage_completion = ($total_score / $total_questions) * 100;
            $percentage = round($percentage_completion);
            ?>
            <div class="progress-container">
                <?php echo '<p class="leveltext">'.$row3['quiz_level'].'</p>'; ?>
                <div class="progress-bar">
                    <div class="progress-bar-inner" style="width: <?php echo $percentage; ?>%;"><?php echo $percentage; ?>%</div>
                </div>
            </div> 
            <?php
        }
    $i++;
    }   
    ?>

</body>
</html>