<?php

require 'config.php';

$sql="SELECT QuestionNO, Question, Option1, Option2, Option3 FROM exams";

$result=$conn->query($sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Entrance Exam</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/register.css">
    <link rel="stylesheet" href="styles/bankent.css">
    <script src="js/exam.js"></script>
</head>
<body>
    <header class="head1">
        <div class="logo">
            <img src="Images/logoicon.png" alt="Logo">
            <h1>Online Examination Platform</h1>
        </div>
        <div class="user-section">
            <span class="user-name">User Name</span>
            <img src="Images/usericon.png" alt="User Icon" class="user-icon">
            
        </div>
    </header>
    <header class="head2">
        <nav>
            <ul class="nav-menu">
                <li><a href="index.html"><img src="Images/homeicon.png" alt="Home Icon"> Home</a></li>
                <li><a href="exam.html"><img src="Images/examicon.png" alt="Exam Icon"> Exam</a></li>
                <li><a href="result.html"><img src="Images/result.png" alt="Result Icon"> Result</a></li>
                <li><a href="payment.html"><img src="Images/savepay1.png" alt="Payment Icon"> Payment</a></li>
                <li><a href="library.html"><img src="Images/libraryicon.png" alt="Library Icon"> Library</a></li>
                <li><a href="help.html"><img src="Images/help.png" alt="Help Icon"> Help</a></li>
            </ul>
        </nav>
    </header>
    <br>

    <section class="bankexam">
        <div class="banken-title">
            <h1>Bank Entrance Exam</h1>
        </div>

        <div class="paper">

<form action="exam_answer.php" method="post">     

        <?php

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="question">';
    echo '<h3>' . htmlspecialchars($row['QuestionNO']) . '. ' . htmlspecialchars($row['Question']) . '</h3>';
    echo '<div class="answers">';
    echo '<label class="abullet"><input type="radio" name="q' . $row['QuestionNO'] . '" value="1"> ' . htmlspecialchars($row['Option1']) . '</label>';
    echo '<label class="abullet"><input type="radio" name="q' . $row['QuestionNO'] . '" value="2"> ' . htmlspecialchars($row['Option2']) . '</label>';
    echo '<label class="abullet"><input type="radio" name="q' . $row['QuestionNO'] . '" value="3"> ' . htmlspecialchars($row['Option3']) . '</label>';
    echo '</div>';
    echo '</div>';
}

        ?>

</div>

<input type="submit" value="Submit">

</FROM>

<br>
<br>



<footer>
    <div class="footer-container">
        <div class="logo">
            <img src="Images/logo.jpg" alt="Logo">
        </div>

        <div class="footer-follow-us">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><img src="Images/fbicon.png" alt="Facebook"></a>
                <a href="#"><img src="Images/whatsappicon.png" alt="WhatsApp"></a>
                <a href="#"><img src="Images/youtube.png" alt="YouTube"></a>
                <a href="#"><img src="Images/tiwitter.png" alt="Twitter"></a>
            </div>
        </div>

        <div class="footer-links">
            <a href="aboutus.html"><img src="Images/about.png" alt="About Icon">About Us</a>
            <a href="t&c.html"><img src="Images/t&c.png" alt="t&c Icon">Terms and Conditions</a>
            <a href="contactus.html"><img src="Images/callicon.png" alt="Contact Icon">Contact Us</a>
        </div>
    </div>

    <div class="footer-copyright">
        <p>Copyright 2024 © TopBankGuide. All Rights Reserved.</p>
    </div>
</footer>   
</body>
</html>


</body>
</html>

