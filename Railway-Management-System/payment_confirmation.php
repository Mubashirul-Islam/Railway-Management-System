<!DOCTYPE html>
<html>
<head>
    <title>Payment Confirmation</title>
  
    <style>
	     body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Confirmation</h1>

        <?php
        include('connection.php'); 
        // Retrieve the latest booking details from ticket table
        $query = "SELECT TrainID, Seat FROM history ORDER BY BOOKINGTIME DESC LIMIT 1";
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

                echo "<p>Your fare: $totalFare</p>";

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
    </div>
</body>
</html>
