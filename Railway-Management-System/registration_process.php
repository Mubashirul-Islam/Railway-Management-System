<?php
// Include the database connection script
include('connection.php');

// Get form field values
$NID = $_POST['NID'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];

// SQL query for inserting
$query = "INSERT INTO User (NID, FirstName, LastName, Password, Email, Phone, DateOfBirth) VALUES ('$NID', '$firstName', '$lastName', '$password', '$email', '$phone', '$dob')";

// Execute the query
if ($conn->query($query) === TRUE) {
    echo "Registration successful!";
    header("Location: home.html");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
