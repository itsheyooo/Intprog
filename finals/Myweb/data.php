<?php
// Database connection
$servername = "localhost";  // Use your database server hostname
$username = "root";  // Your database username
$password = "";  // Your database password
$dbname = "sarap_foods";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching user input from the query string
$query = $_GET['q'];
$results = [];

if ($query) {
    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT name FROM foods WHERE name LIKE CONCAT(?, '%') LIMIT 10");
    $searchTerm = $query;
    $stmt->bind_param('s', $searchTerm);
    $stmt->execute();
    $stmt->bind_result($foodName);

    // Fetch the results and add them to the array
    while ($stmt->fetch()) {
        $results[] = $foodName;
    }
    $stmt->close();
}

include 'db.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $stmt = $conn->prepare("SELECT image_path FROM your_table_name WHERE food_name LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['image' => $row['image_path']]);
    } else {
        echo json_encode(['image' => '']);
    }

    $stmt->close();
}

$conn->close();

// Return suggestions as JSON
echo json_encode($results);
?>
