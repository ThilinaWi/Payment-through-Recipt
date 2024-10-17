<?php
require 'config.php';

if(isset($_POST['submit'])){
    $UserID = $_POST['UserID'];
    $ExamType = $_POST['ExamType'];
    $PayType = $_POST['PayType'];
    $Amount = $_POST['Amount'];

    // File upload handling
    if(isset($_FILES['Recipt']) && $_FILES['Recipt']['error'] == 0){
        $fileTmpPath = $_FILES['Recipt']['tmp_name'];
        $fileName = $_FILES['Recipt']['name'];
        $fileSize = $_FILES['Recipt']['size'];
        $fileType = $_FILES['Recipt']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        
        // Allowed file types
        $allowedfileExtensions = array('jpg', 'jpeg', 'png');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Directory where files will be saved
            $uploadFileDir = 'recipt/';
            $dest_path = $uploadFileDir . $fileName;

            // Move the file to the directory
            if(move_uploaded_file($fileTmpPath, $dest_path)){
                // Insert the data into the database with image path
                $sql = "INSERT INTO `payment` (UserID, ExamType, PayType, Amount, Recipt) VALUES ('$UserID','$ExamType', '$PayType', '$Amount', '$dest_path')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    header('location:paymentView.php');
                } else {
                    die(mysqli_error($conn));
                }
            } else {
                echo 'Error moving the file to the upload directory. Please check directory permissions.';
            }
        } else {
            echo 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
        }
    } else {
        echo 'No file uploaded or there was an error with the file upload.';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  //  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet"     href="styles/payment.css">
   <link rel="stylesheet" href="styles/style.css">
  <!--  <link rel="stylesheet" href="styles/register.css"> -->
    

</head>
<body>
    <header class="head1">
        <div class="logo">
            <img src="Images/logoicon.jpg" alt="Logo">
            <h1>Online Examination Platform</h1>
        </div>
        <div class="user-section">
            <span class="user-name">User name</span>
            <img src="Images/usericon.png" alt="User Icon" class="user-icon">
        </div>
    </header>
    <header  class="head2">
        <nav>
            <ul class="nav-menu">
                <li><a href="index.html"><img src="Images/homeicon.png" alt="Home Icon"> Home</a></li>
                <li><a href="exam.html"><img src="Images/examicon.png" alt="Exam Icon"> Exam</a></li>
                <li><a href="result.html"><img src="Images/result.png" alt="Result Icon"> Result</a></li>
                <li><a href="payment.php"><img src="Images/savepay1.png" alt="Payment Icon"> Payment</a></li>
                <li><a href="library.html"><img src="Images/libraryicon.png" alt="Library Icon"> Library</a></li>
                <li><a href="help.html"><img src="Images/help.png" alt="Help Icon"> Help</a></li>
            </ul>
        </nav>
       
    </header>
  <!-- add main-->
<br>
<br>
<!--Starting form-->
<div class="container my-5">
    <form method="post" action="" enctype="multipart/form-data">
        <h1 class="mb-1">Payment</h1>
        <div class="mb-3">
            <label>User ID</label>
            <input type="text" class="form-control" placeholder="Enter your UserID" name="UserID" autocomplete="off" required pattern=".{4}" title="UserID must be exactly 4 characters long">
        </div>

        <div class="mb-2">
        <div class="form-group">
           <label>Exam type</label>
            <select class="form-control" name="ExamType"required>
               <option value="Bank Entrance Exams">Bank Entrance Exams</option>
               <option value="RBI Grade Exams">RBI Grade Exams</option>
               <option value="Promotional Exams">Promotional Exams</option>
               <option value="Specialist Officer Exams">Specialist Officer Exams</option>
               <option value="Banking Awareness Exams">Banking Awareness Exams</option>
            </select>
        </div>

         <div class="form-group">
           <label>Payment type</label>
            <select class="form-control" name="PayType"required>
               <option value="Credit/Debit Card">Credit/Debit Card</option>
               <option value="Bank Transfer">Bank Transfer</option>
            </select>
         </div>
        </div>

        <div class="mb-3">
            <label>Amount( RS.)</label>
            <input type="text" class="form-control" placeholder="Enter the Amount" name="Amount" autocomplete="off" required min="0" step="0.01" pattern="^\d+(\.\d{1,2})?$" title="Please enter a valid amount (e.g., 100 or 100.50)">
        </div>

        <div class="mb-3">
            <label>Recipt (Upload .jpeg .png .jpeg)</label>
            <input type="file" class="form-control" name="Recipt" accept=".jpg, .jpeg, .png"required>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
<!--Ending form-->
<br>
<br>


</main>
<!-- add main-->


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
    <script src=""></script>

</body>
</html>   




