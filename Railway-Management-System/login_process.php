<?php
// Include the database connection script
include('connection.php');

// Get the user's entered credentials from the form
$email = $_POST['email'];
$password = $_POST['psw'];

// Find the user in the database based on the provided email
$query = "SELECT * FROM User WHERE Email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verify the password
    if ($user['Password'] === $password) {
        echo "Sign-in successful!";
        header("Location: home.html");
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}

// Close the database connection
$conn->close();
?>
