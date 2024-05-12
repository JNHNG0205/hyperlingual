<?php
 include("adminsession.php");
?>


<?php 
    include("conn.php");

    // Check if the form is submitted
    if (isset($_POST['submitBtn'])) {
        // Handle form submission based on quiz id;
        $quiz_id = $_POST['quiz_id'];
        if ($quiz_id === "1") {
            // Handle MCQ insertion
            $question_type = "MCQ";
            $question_text = $_POST['question_text'];
            $quiz_id = 1;
            $wrong_option1 = $_POST['wrong_option1'];
            $wrong_option2 = $_POST['wrong_option2'];
            $correct_option = $_POST['correct_option'];

            // Prepare the SQL statement using placeholders
            $sql = "INSERT INTO question (question_text, question_type, quiz_id) VALUES (?, ?, ?)";
            
            // Prepare the statement
            $stmt = mysqli_prepare($con, $sql);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ssi", $question_text, $question_type, $quiz_id);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                // Get the ID of the inserted question
                $question_id = mysqli_insert_id($con);

                // Prepare the SQL statement for inserting options
                $sql_options = "INSERT INTO options (option_text, iscorrect, question_id) VALUES (?, ?, ?)";
                
                // Prepare the statement for options insertion
                $stmt_options = mysqli_prepare($con, $sql_options);

                // Set iscorrect to 0 for wrong options
                $iscorrect = 0;
                mysqli_stmt_bind_param($stmt_options, "sii", $wrong_option1, $iscorrect, $question_id);
                mysqli_stmt_execute($stmt_options);

                mysqli_stmt_bind_param($stmt_options, "sii", $wrong_option2, $iscorrect, $question_id);
                mysqli_stmt_execute($stmt_options);

                // Set iscorrect to 1 for the correct option
                $iscorrect = 1;
                mysqli_stmt_bind_param($stmt_options, "sii", $correct_option, $iscorrect, $question_id);
                mysqli_stmt_execute($stmt_options);

                // Alert message for successful insertion
                echo '<script>alert("MCQ record added!");</script>';
            } else {
                // Error message if insertion fails
                echo "Error: " . mysqli_error($con);
            }

            // Close statements
            mysqli_stmt_close($stmt);
            mysqli_stmt_close($stmt_options);
        } elseif ($quiz_id === "2") {
            $question_type = "FITB";
            $question_text = $_POST['question_text'];
            $quiz_id = 2;
            $correct_answer = $_POST['correct_answer'];

            // Prepare the SQL statement using placeholders
            $sql = "INSERT INTO question (question_text, question_type, quiz_id) VALUES (?, ?, ?)";
            
            // Prepare the statement
            $stmt = mysqli_prepare($con, $sql);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ssi", $question_text, $question_type, $quiz_id);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                // Get the ID of the inserted question
                $question_id = mysqli_insert_id($con);

                // Prepare the SQL statement for inserting options
                $sql_answer = "INSERT INTO answer (answer_text, question_id) VALUES (?, ?)";
                
                // Prepare the statement for options insertion
                $stmt_answer = mysqli_prepare($con, $sql_answer);

                // Set iscorrect to 0 for wrong options
                mysqli_stmt_bind_param($stmt_answer, "si", $correct_answer, $question_id);
                mysqli_stmt_execute($stmt_answer);

                // Alert message for successful insertion
                echo '<script>alert("FITB record added!");</script>';
            } else {
                // Error message if insertion fails
                echo "Error: " . mysqli_error($con);
            }

        } elseif ($quiz_id === "3") {
            $question_type = "ERROR";
            $question_text = $_POST['question_text'];
            $quiz_id = 3;
            $correct_answer1 = $_POST['correct_answer1'];
            $correct_answer2 = $_POST['correct_answer2'];
            $correct_answer3 = $_POST['correct_answer3'];

            // Prepare the SQL statement using placeholders
            $sql = "INSERT INTO question (question_text, question_type, quiz_id) VALUES (?, ?, ?)";
            
            // Prepare the statement
            $stmt = mysqli_prepare($con, $sql);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ssi", $question_text, $question_type, $quiz_id);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                // Get the ID of the inserted question
                $question_id = mysqli_insert_id($con);

                // Prepare the SQL statement for inserting options
                $sql_answer = "INSERT INTO answer (answer_text, question_id) VALUES (?, ?)";
                
                // Prepare the statement for options insertion
                $stmt_answer = mysqli_prepare($con, $sql_answer);

                // Set iscorrect to 0 for wrong options
                mysqli_stmt_bind_param($stmt_answer, "si", $correct_answer1, $question_id);
                mysqli_stmt_execute($stmt_answer);

                mysqli_stmt_bind_param($stmt_answer, "si", $correct_answer2, $question_id);
                mysqli_stmt_execute($stmt_answer);

                mysqli_stmt_bind_param($stmt_answer, "si", $correct_answer3, $question_id);
                mysqli_stmt_execute($stmt_answer);

                // Alert message for successful insertion
                echo '<script>alert("ERROR record added!");</script>';
            } else {
                // Error message if insertion fails
                echo "Error: " . mysqli_error($con);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=ADLaM+Display&display=swap');
        body {
            font-family: "ADLaM Display";
        }


        .hidden {
            display: none;
        }
        .headertext {
        color: #ffffff;
        font-family: "ADLaM Display";
        font-weight: 200;
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
            border-color: #ffffff;
            border-width: 1px;
            border-style: solid;
        }
        .button{
            width: 100px;
            height: 30px;
            padding: 0px 10px 0px 10px;
            background: #0683FD;
            color: #FFFFFF;
            border-color: #0683FD;
            border-width: 1px;
            border-style: solid;
            border-radius: 35px 35px 35px 35px;
            font-family: "ADLaM Display";
            font-size: 20px;
            text-align: center;
        }
        
        
    </style>
</head>
<body>
<div class="header">
    <img style="width: 170px; height: 100px;margin-right:1300px;" src="logo.png" alt="">
    <div>
    <a href="adminpage.php" class="headertext">Home</a><a href="adminlogout.php"class="headertext">Logout</a>
        
    </div>
</div>
    <h1>Add Question</h1>
    
<form method="post" action="">
    
    <!-- Common Form Fields -->
    <label for="quiz_id">Quiz</label><br>
    <select name="quiz_id" id="quiz_id" onchange="showQuestionForm()">
        <option value="">Select</option>
        <option value="1">Beginner English Quiz</option>
        <option value="2">Intermediate English Quiz</option>
        <option value="3">Advanced English Quiz</option>
    </select><br><br>
    <label for="question_text">Question Text</label><br>
    <textarea name="question_text" id="question_text" cols="50" rows="10"></textarea><br><br>
    
    <!-- MCQ Form Fields -->
    <div id="mcq_form" class="hidden">
        <h1>MCQ</h1>
        <label for="">Wrong Option 1</label><br>
        <input type="text" name="wrong_option1"> <br><br>
        <label for="">Wrong Option 2</label><br>
        <input type="text" name="wrong_option2"><br><br>
        <label for="">Correct Option</label><br>
        <input type="text" name="correct_option"><br><br>
    </div>

    <!-- FITB Form Fields -->
    <div id="fitb_form" class="hidden">
        <h1>Fill in the blank</h1>
        <label for="">Correct Answer</label><br>
        <input type="text" name="correct_answer"> <br><br>
     
    </div>


     <!-- ERROR Form Fields -->
     <div id="error_form" class="hidden">
        <h1>Find the error</h1>
        <label for="">Correct Answer</label><br>
        <input type="text" name="correct_answer1"><br><br>
        <label for="">Correct Answer</label><br>
        <input type="text" name="correct_answer2"> <br><br>
        <label for="">Correct Answer</label><br>
        <input type="text" name="correct_answer3"> <br><br>
     
    </div>
    
    <!-- Submit and Reset Buttons -->
    <input type="submit" name="submitBtn" value="Submit" class="button">
    <input type="reset" value="Reset" class="button">   
</form>

    <script>
        function showQuestionForm() {
            var selectedType = document.getElementById("quiz_id").value;
            if (selectedType === "1") {
                document.getElementById("mcq_form").classList.remove("hidden");
                document.getElementById("fitb_form").classList.add("hidden");
                document.getElementById("error_form").classList.add("hidden");
            } else if (selectedType === "2") {
                document.getElementById("mcq_form").classList.add("hidden");
                document.getElementById("fitb_form").classList.remove("hidden");
                document.getElementById("error_form").classList.add("hidden");
            } else if (selectedType === "3") {
                document.getElementById("mcq_form").classList.add("hidden");
                document.getElementById("fitb_form").classList.add("hidden");
                document.getElementById("error_form").classList.remove("hidden");
            } else {
                document.getElementById("mcq_form").classList.add("hidden");
                document.getElementById("fitb_form").classList.add("hidden");
                document.getElementById("error_form").classList.add("hidden");
            }
        }

        
    </script>
</body>
</html>
