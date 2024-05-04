
<?php
require_once 'connection.php';

$username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert user data into the database
    $sql = "INSERT INTO users (Username, Email, Password, RegistrationDate) VALUES ('$username', '$email', '$password', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();

?>