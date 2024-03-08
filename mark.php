<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['plate_number'])) {
    $plateNumber = $_POST['plate_number'];


    $sql = "UPDATE paint_jobs SET status = 'completed' WHERE plate_number = ?";


    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $plateNumber);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }


    $stmt->close();
    $conn->close();
}

header('Location: index.php');
exit();
