<?php
// Start a new session
session_start();

$servername = "34.159.254.87"; 
$username = "root";     // Your RDS username
$password = "root";     // Your RDS password
$dbname = "ta3awn-id";                  // Your RDS database name
$port = 3306;                          // RDS MySQL default port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if (isset($_POST['username'])) {
    // Fetch user input from form
    $user_username = $_POST['username'];

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT id FROM userinfo WHERE email_address = ?");
    $stmt->bind_param("s", $user_username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists in the database
    if ($row = $result->fetch_assoc()) {
        // If user exists, set session variables and redirect to profile.php
        $_SESSION['userid'] = $row['id']; // It's better to use user ID for the session
        header("Location: profile.php");
        exit; // Don't forget to stop the script
    } else {
        // If user does not exist, redirect to error.php
        header("Location: error.php");
        exit; // Don't forget to stop the script
    }
}

// Close connection
$conn->close();
?>
