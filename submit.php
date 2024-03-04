<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Database 
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "car_db"; 
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $plateNumber = $_POST['plateNumber'];
    $currentColor = $_POST['currentColor'];
    $targetColor = $_POST['targetColor'];
    
    $stmt = $conn->prepare("INSERT INTO paint_jobs (plate_number, current_color, target_color) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $plateNumber, $currentColor, $targetColor);
    
    if ($stmt->execute()) {

        if ($stmt->affected_rows > 0) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: No rows affected. Failed to insert data into the database.";
        }
    } else {
        echo "Error: Execute statement failed: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>
