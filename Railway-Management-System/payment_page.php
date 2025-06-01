<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
</head>
<body>
    <h1>Payment Confirmation</h1>

    <?php
    include('connection.php'); 

    // Retrieve the latest booking details from history table
    $query = "SELECT TrainID, Seat FROM ticket ORDER BY BOOKINGTIME DESC LIMIT 1";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $trainID = $row['TrainID'];
        $seat = $row['Seat'];

        // Retrieve fare from Train table
        $trainQuery = "SELECT Fare FROM Train WHERE TrainID = '$trainID'";
        $trainResult = $conn->query($trainQuery);

        if ($trainResult->num_rows > 0) {
            $trainRow = $trainResult->fetch_assoc();
            $farePerSeat = $trainRow['Fare'];
            
            // Calculate total fare
            $totalFare = $farePerSeat * $seat;

            echo "<p><h2>Your fare: $totalFare</h2></p>";
            
            // Display payment form here
            echo '<form action="payment.html" method="post">';
            echo '<input type="hidden" name="totalFare" value="' . $totalFare . '">';
            // Add other payment form fields
            echo '<button type="submit">Pay Now</button>';
            echo '</form>';
        } else {
            echo "Train fare not found.";
        }
    } else {
        echo "Booking details not found.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
