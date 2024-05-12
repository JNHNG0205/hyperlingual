<?php
include("session.php");
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted answers
    $answers = $_POST['answer'];

    // Initialize score and total questions
    $score = 0;
    $total_questions = count($answers);

    // Loop through each submitted answer
    foreach ($answers as $question_id => $selected_option_id) {
        // Retrieve the correct option for the question
        $sql = "SELECT iscorrect FROM options WHERE question_id = $question_id AND option_id = $selected_option_id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        // Verify if the selected option is correct
        if ($row && $row['iscorrect'] == 1) {
            $score++; // Increment score if the answer is correct
        }
    }

    // Calculate the fraction score
    $fraction_score = $score.'/'.$total_questions;

    // Update or insert scores in the progress table
    if(isset($_GET['level'])) {
        $level = $_GET['level'];
        $lang = $_GET['lang'];
        if ($level == 'Beginner' && $lang == 'English'){
            $quiz_id = 1;
        }else if ($level == 'Beginner' && $lang == 'Japanese'){
            $quiz_id = 4;
        }
        $user_id = $_SESSION['mySession']; // Assuming you have stored user ID in the session
        
        // Check if the user has attempted the quiz before
        $sql_check_attempt = "SELECT COUNT(*) AS attempts FROM user_progress WHERE user_id = $user_id AND quiz_id = $quiz_id";
        $result_check_attempt = mysqli_query($con, $sql_check_attempt);
        $row_check_attempt = mysqli_fetch_assoc($result_check_attempt);
        $num_attempts = $row_check_attempt['attempts'];

        if ($num_attempts > 0) {
            // If user has attempted before, update the scores
            foreach ($answers as $question_id => $selected_option_id) {
                // Retrieve the correct option for the question
                $sql = "SELECT iscorrect FROM options WHERE question_id = $question_id AND option_id = $selected_option_id";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);

                // Verify if the selected option is correct
                $is_correct = ($row && $row['iscorrect'] == 1) ? 1 : 0;

                // Update the score in the database
                $sql_update = "UPDATE user_progress SET score = $is_correct WHERE user_id = $user_id AND quiz_id = $quiz_id AND question_id = $question_id";
                mysqli_query($con, $sql_update);
            }

            echo "Scores updated successfully.";
        } else {
            // If user is attempting for the first time, insert the scores
            // Initialize an array to store the values for the INSERT statement
            $insert_values = array();

            // Loop through each question and determine the score
            foreach ($answers as $question_id => $selected_option_id) {
                // Retrieve the correct option for the question
                $sql = "SELECT iscorrect FROM options WHERE question_id = $question_id AND option_id = $selected_option_id";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);

                // Verify if the selected option is correct
                $is_correct = ($row && $row['iscorrect'] == 1) ? 1 : 0;

                // Add the values for the INSERT statement
                $insert_values[] = "($user_id, $quiz_id, $question_id, $is_correct)";
            }

            // Construct the SQL INSERT statement
            $sql_insert = "INSERT INTO user_progress (user_id, quiz_id, question_id, score) VALUES " . implode(",", $insert_values);

            // Execute the SQL INSERT statement
            if (mysqli_query($con, $sql_insert)) {
                echo "Scores inserted successfully.";
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    }
    
    // Close the database connection
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HyperLingual | Quiz Result</title>
    <style>
          @import url("https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap");

body {
height: 1500px;
font-family: "ADLaM Display";
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
<div>
    <?php if (isset($fraction_score)): ?>
        <h2>Your Quiz Result:</h2>
        <p>Your score: <?php echo $fraction_score; ?></p>
        <?php 
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        }
        ?>
        <button class="submit-button" onclick="courseRedirect('<?php echo isset($lang) ? $lang : ''; ?>')">Back to Course Status</button>
        <script>
            function courseRedirect(lang) {
                window.location.href = "coursestatus.php?lang=" + lang;
            }
        </script>
    <?php else: ?>
        <p>No answers submitted.</p>
    <?php endif; ?>
</div>
</body>
</html>