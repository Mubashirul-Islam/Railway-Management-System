<?php
include('connection.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $trainID = $_POST['trainID'];
    $journeyDate = $_POST['journeyDate'];
    $seat = $_POST['seat'];
    $NID = $_POST['NID'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
// Search for trainName in the train table
$sql = "SELECT TrainName FROM train WHERE trainID = $trainID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Train found, fetch the trainName
    $row = $result->fetch_assoc();
    $trainName = $row["TrainName"];
 
    // Insert data into the database (replace with your table and column names)
    $sql = "INSERT INTO ticket (TrainID, TrainName, JourneyDate, Seat, NID, Phone, Email)
            VALUES ('$trainID', '$trainName', '$journeyDate', '$seat', '$NID', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<p><h3>Ticket booked successfully.</h3></p>";
		echo "<br><br><a href='payment_page.php' style='text-align: center; display: block;'>GO FOR PAYMENT</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>