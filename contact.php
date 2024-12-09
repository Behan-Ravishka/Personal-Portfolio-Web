<?php
session_start();
// Database connection details
$servername = "sql312.infinityfree.com";
$username = "if0_37881167";
$password = "vof7JzXPrbsjPE"; 
$dbname = "if0_37881167_portfolio_contact_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate data (you can add more robust validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Send error response
        echo json_encode(array("status" => "error", "message" => "Please fill in all fields."));
        exit();
    }

    // Prepare and execute an SQL statement to insert data
    $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    session_start(); // Start the session

if ($stmt->execute()) {
    $_SESSION['message'] = "Message Sent successfully!";
    $_SESSION['msg_type'] = "success"; // You can use 'error' for error messages
    header("Location: index.php#contact");
    exit();
} else {
    $_SESSION['message'] = "There was a problem submitting the form.";
    $_SESSION['msg_type'] = "error"; // Use error type for error messages
    header("Location: index.php#contact");
    exit();
}
    

    $stmt->close();
}

$conn->close();
?>