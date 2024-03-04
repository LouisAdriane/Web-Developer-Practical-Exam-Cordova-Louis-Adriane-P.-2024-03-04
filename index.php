<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Paint Jobs</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="newPaintJobPage" class="page">
        <h1 align="center">NEW PAINT JOB</h1>
        <div id="carImages">
            <img id="leftCar" src="img/graycar.png" alt="Left Car">
            <img id="arrow" src="img/grayarrow.png" alt="Arrow" style="width: 10%; margin-bottom: 4%;">
            <img id="rightCar" src="img/graycar.png" alt="Right Car">
        </div>
    </div>

    <form id="paintJobForm" action="submit.php" method="post">
        <h2>Car details</h2>
        <label for="plateNumber">Plate No:</label>
        <input type="text" id="plateNumber" name="plateNumber">
        <label for="currentColor">Current Color:</label>
        <select id="currentColor" name="currentColor">
            <option value="">Select Color</option>
            <option value="gray">Gray</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
        <label for="targetColor">Target Color:</label>
        <select id="targetColor" name="targetColor">
            <option value="">Select Color</option>
            <option value="gray">Gray</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
    <h2 align="center">Paint Queue</h2>
    <table>
        <thead>
            <tr>
                <th>Plate Number</th>
                <th>Current Color</th>
                <th>Target Color</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "car_db";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Fetch data from database
            $sql = "SELECT plate_number, current_color, target_color FROM paint_jobs";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["plate_number"] . "</td>";
                    echo "<td>" . $row["current_color"] . "</td>";
                    echo "<td>" . $row["target_color"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No paint jobs found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <script src="js/script.js"></script>
</body>

</html>