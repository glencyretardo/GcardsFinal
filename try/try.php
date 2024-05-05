<?php
session_start();

// Check if the user is logged in and the username is available in the session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // If the username is not available in the session, you can redirect the user to the login page or handle it accordingly
    // For example:
    header("Location: login.php");
    exit(); // Make sure to exit after redirection to prevent further execution of the script
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Side menu responsive Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="try.css">
</head>
<body>  

<?php include 'navigation.php'; ?>

<div class='dashboard-app'>
  <div class='dashboard-content'>
    <div class='container'>
      <div class='card'>
        <div class='card-header'>
          <h1> Hello, <?php echo $username; ?> !</h1>
        </div>
        <div class='card-body'>
          <p>Your account type is: Administrator</p>
        </div>
      </div>
    </div>
  </div>
</div>
  
<!-- JavaScript code for dynamic behavior -->
 
</body>
</html>
