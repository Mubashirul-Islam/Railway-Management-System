<!DOCTYPE html>
<html>
<head>
    <title>User Information Search</title>
    <link rel="stylesheet" type="text/css" href="profstyles.css">
</head>
<body>
    <h1>User Information Search</h1>
    <form method="POST">
        <label for="searchNID">Enter NID:</label>
        <input type="text" id="searchNID" name="searchNID" required>
        <input type="submit" value="Search">
    </form>

    <?php
// Include the database connection script
include('connection.php'); 

// Initialize variables
$NID = "";
$infos = array();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user-provided NID and
    $NID = $_POST['searchNID'];


    // SQL query to fetch info details based on NID and
    $query = "SELECT * FROM user WHERE NID = '$NID'";
    
    // Execute the query
    $result = $conn->query($query);

    // Fetch info details and store in the $info array
    while ($row = $result->fetch_assoc()) {
        $infos[] = $row;
    }

    // Close the database connection
    $conn->close();
}

// Display the info details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($infos)) {
        echo "<table width ='70%' border ='3' align ='left'>";
        echo "<tr align ='left'><th>NID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Date of Birth</th></tr>";
        foreach ($infos as $info) {
            echo "<tr>";
            echo "<td>" . $info['NID'] . "</td>";
            echo "<td>" . $info['FirstName'] . "</td>";
            echo "<td>" . $info['LastName'] . "</td>";
            echo "<td>" . $info['Email'] . "</td>";
            echo "<td>" . $info['Phone'] . "</td>";
            echo "<td>" . $info['DateOfBirth'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No info found for the specified NID.";
    }
}
?>    

    </body>
</html>
