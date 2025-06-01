<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-image: url("train.jpg");
    color: #ffffff;
}
* {box-sizing: border-box;}


input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  padding: 20px;
}

</style>
</head>
<body>

<h1>Train Schedule</h1>

<form class="form-inline" action="" method="post">
  <label for="From">From:</label>
  <input type="text" placeholder="Enter Station" name="From">
  <label for="To">To:</label>
  <input type="text" placeholder="Enter Station" name="To">
  <button type="submit">Search</button>
</form>
<br>
<?php
// Include the database connection script
include('connection.php');

// Initialize variables
$origin = $destination = "";
$trains = array();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user-provided origin and destination
    $origin = $_POST['From'];
    $destination = $_POST['To'];

    // SQL query to fetch train details based on origin and destination
    $query = "SELECT * FROM Train WHERE Origin = '$origin' AND Destination = '$destination'";
    
    // Execute the query
    $result = $conn->query($query);

    // Fetch train details and store in the $trains array
    while ($row = $result->fetch_assoc()) {
        $trains[] = $row;
    }

    // Close the database connection
    $conn->close();
}

// Display the train details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($trains)) {
        echo "<table width ='70%' border ='3' align ='center'>";
        echo "<tr align ='left'><th>Train ID</th><th>Train Name</th><th>Departure Time</th><th>Arrival Time</th><th>Capacity</th></tr>";
        foreach ($trains as $train) {
            echo "<tr>";
            echo "<td>" . $train['TrainID'] . "</td>";
            echo "<td>" . $train['TrainName'] . "</td>";
            echo "<td>" . $train['DepartureTime'] . "</td>";
            echo "<td>" . $train['ArrivalTime'] . "</td>";
            echo "<td>" . $train['Capacity'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No trains found for the specified origin and destination.";
    }
}
?>
<div class="container">
  <form action="process.php" method="POST">
        <label for="trainID">Train ID:</label>
        <input type="text" id="trainID" name="trainID" required><br><br>

        <label for="journeyDate">Journey Date:</label>
        <input type="date" id="journeyDate" name="journeyDate" required><br><br>

        <label for="seat">Seat:</label>
        <input type="text" id="seat" name="seat" required><br><br>

        <label for="NID">NID:</label>
        <input type="text" id="NID" name="NID" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <input type="submit" value="Book Ticket">

    </form>
    </div>
</body>
</html>
