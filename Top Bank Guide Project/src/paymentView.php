<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bank Guide</title>
    <link rel="stylesheet" href="styles/PaymentV.css">
	<!-- <link rel="stylesheet" href="styles/table.css"> -->
    

</head>
<body>

    <!-- Side Menu -->
    <div class="side-menu">
        <div class="brand-name">
            <h1>Top Bank Guide</h1>
        </div>
        <ul>
            <li><a href="#"><img src="Images/usericon.png" alt="User Icon">Users</a></li>
            <li><a href="#"><img src="Images/examicon.png" alt="Exam Icon">Exam</a></li>
            <li><a href="#"><img src="Images/result.png" alt="Result Icon">Result</a></li>
            <li><a href=" "><img src="Images/savepay1.png" alt="Payment Icon">Payment</a></li>
            <li><a href="#"><img src="Images/help.png" alt="Help Icon">Help</a></li><br><br><br><br><br><br><br><br><br><br><br>
            <li><a href="index.html">Log out</a></li>
        </ul>
    </div>

    <!-- Container -->
    <div class="container">
        
        <!-- Header Section -->
        <div class="header">
            <div class="nav">
                <div class="user">
                    <div class="img-case">
                        <h1>Dashboard</h1>
                        <span class="user-name">Admin</span>
                        <img src="Images/usericon.png" alt="User Icon">
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Employees</h3>
                    </div>
                    <div class="icon-case">
                        <img src="employees.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2000</h1>
                        <h3>Exams</h3>
                    </div>
                    <div class="icon-case">
                        <img src="employees.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2000</h1>
                        <h3>Results</h3>
                    </div>
                    <div class="icon-case">
                        <img src="employees.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2500</h1>
                        <h3>Payments</h3>
                    </div>
                    <div class="icon-case">
                        <img src="employees.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Payment History Table  -->
            <h2>Payment History</h2>
            <div class="payment-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">UserID</th>
                            <th scope="col">ExamType</th>
                            <th scope="col">PayType</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Recipt</th>
                            <th scope="col" style="width: 150px;">Operations</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                $sql = "SELECT * FROM `payment`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id       = $row['id'];
                        $UserID   = $row['UserID'];
                        $ExamType = $row['ExamType'];
                        $PayType  = $row['PayType'];
                        $Amount   = $row['Amount'];
                        $Recipt   = $row['Recipt']; // Image path stored in the database
                        
                        // Display data in rows
                        echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$UserID.'</td>
                                <td>'.$ExamType.'</td>
                                <td>'.$PayType.'</td>
                                <td>'.$Amount.'</td>
                                <td>
                                <button class="btn btn-secondary my-2">
                                 <a href="'.$Recipt.'" target="_blank" class="text-light">
                                    <img src="'.$Recipt.'" alt="Recipt Image" width="100px" height="50px">
                                 </a>   
                                    <br>
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-primary">
                                        <a href="paymentUp.php?updateid='.$id.'" class="text-light">Update</a>
                                    </button>
                                    <button class="btn btn-danger">
                                        <a href="paymentDel.php?deleteid='.$id.'" class="text-light">Delete</a>
                                    </button>
                                </td>
                            </tr>';
                    }
                }
                ?>
                
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
</html>
