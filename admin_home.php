<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
    
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
             <?php
                    $conn = mysqli_connect('localhost','root','','net_banking');
                    $sql = mysqli_query($conn, "SELECT `uname` FROM `admin`");
                    $print_data = mysqli_fetch_row($sql);
                    echo "Welcome ";
                    echo $print_data[0];
                    echo " !"

            ?>

            </h1>
            <p id="customer" style="max-width:600px">
                
                You are at the Admin port of HB Bank.
                Here You Can manage all of core Internet Banking settings.<br>
                You can add/manage customers, view their transactions, edit their
                details and even delete the account of users on demand if they want to disclose there account.<br> 
                You can also post the informantion like notices and news regarding our bank on the website.
                <br>Please keep in mind that with big power comes big responsibility.<br>
                Therefore please do not misuse your admin control to create trouble.
                
                </p>
        </div>
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>
