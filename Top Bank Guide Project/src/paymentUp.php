<?php
require 'config.php';
$id = $_GET['updateid'];

// Fetch the current data from the database
$sql = "SELECT * FROM `payment` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$UserID   = $row['UserID'];
$ExamType = $row['ExamType'];
$PayType  = $row['PayType'];
$Amount   = $row['Amount'];
$Recipt   = $row['Recipt'];  // Existing receipt image

if (isset($_POST['submit'])) {
    $UserID = $_POST['UserID'];
    $ExamType = $_POST['ExamType'];
    $PayType = $_POST['PayType'];
    $Amount = $_POST['Amount'];

    // Check if a new file is uploaded
    if (isset($_FILES['Recipt']['name']) && $_FILES['Recipt']['name'] != '') {
        // New file uploaded, process it
        $Recipt = $_FILES['Recipt']['name'];
        $Recipt_temp = $_FILES['Recipt']['tmp_name'];

        // Upload directory for images
        $upload_dir = 'recipt/';
        move_uploaded_file($Recipt_temp, $upload_dir . $Recipt);
    } else {
        // No new file uploaded, keep the old image
        $Recipt = $row['Recipt'];
    }

    // Update the database with the new values
    $sql = "UPDATE `payment` SET UserID='$UserID', ExamType='$ExamType', PayType='$PayType', Amount='$Amount', Recipt='$Recipt' WHERE id=$id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
         header('location:paymentView.php');  // Redirect to payment view after success
    } else {
        die(mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/payment.css">
    <!--<link rel="stylesheet" href="styles/register.css">-->
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
    <br>
    <br>


<!-- starting form -->

  <div class="container my-5">
    <form method="post"action = "">
    <h1 class="mb-1">Update Payment</h1>
  <div class="mb-3">
    <label>User ID</label>
    <input type="text" class="form-control"
    placeholder="Enter your UserID" name="UserID"autocomplete="off"required pattern=".{4}" title="UserID must be exactly 4 characters long"value=<?php echo $UserID;?>>
  </div>

  <div class="mb-2">
        <div class="form-group">
           <label>Exam type</label>
            <select class="form-control" name="ExamType"value=<?php echo $ExamType;?>required>
               <option value="Bank Entrance Exams">Bank Entrance Exams</option>
               <option value="RBI Grade Exams">RBI Grade Exams</option>
               <option value="Promotional Exams">Promotional Exams</option>
               <option value="Specialist Officer Exams">Specialist Officer Exams</option>
               <option value="Banking Awareness Exams">Banking Awareness Exams</option>
            </select>
        </div>

         <div class="form-group">
           <label>Payment type</label>
            <select class="form-control" name="PayType"value=<?php echo $PayType;?>required>
               <option value="Credit/Debit Card">Credit/Debit Card</option>
               <option value="Bank Transfer">Bank Transfer</option>
            </select>
         </div>
        </div>
  
  <div class="mb-3">
    <label>Amount( RS.)</label>
    <input type="text" class="form-control"
    placeholder="Enter your Amount Amount"name="Amount"autocomplete="off"required min="0" step="0.01" pattern="^\d+(\.\d{1,2})?$" title="Please enter a valid amount (e.g., 100 or 100.50)"value=<?php echo $Amount;?>>
  </div>
  <div class="mb-3">
    <label>Recipt (Upload .jpeg .png .jpeg)</label> 
    <input type="file" class="form-control" name="Recipt" accept=".jpg, .jpeg, .png"value=<?php echo $Recipt;?>required>
   
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Update</button>
</form>
    </div>

<!-- end form -->
 <br>
 <br>

</main>
</body>


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
                <a href="t&c.html"><img src="Images/t&c.png" alt="Terms Icon">Terms and Conditions</a>
                <a href="contactus.html"><img src="Images/callicon.png" alt="Contact Icon">Contact Us</a>
            </div>
        </div>

        <div class="footer-copyright">
            <p>Copyright 2024 © TopBankGuide. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
