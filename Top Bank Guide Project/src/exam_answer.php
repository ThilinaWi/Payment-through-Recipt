<?php

require 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $questionNumber => $answer) {
        $questionNumber = mysqli_real_escape_string($questionNumber);
        $answer = mysqli_real_escape_string($answer);

    
        $query = "INSERT INTO answertbl (UserID, questionNumber, answer)
                  VALUES ('$userID', '$questionNumber', '$answer')";

        if (mysqli_query($connection, $query)) {
            echo "Answer for question $questionNumber has been submitted successfully.<br>";
        } else {
            echo "Error: " . mysqli_error($connection) . "<br>";
        }
    }
}
?>