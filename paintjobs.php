<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paint Jobs</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-title"><b>JUAN'S AUTO PAINT</b></div>
    <ul>
        <li><a href="index.php">NEW PAINT JOB</a></li>
        <li><a href="paintjobs.php">PAINT JOBS</a></li>

    </ul>
    <h1 align="center">Paint Jobs</h1>

    <h2>Paint Jobs In Progress</h2>
    <table>
        <thead>
            <tr>
                <th>Plate Number</th>
                <th>Current Color</th>
                <th>Target Color</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "car_db";


            $conn = new mysqli($servername, $username, $password, $dbname);


            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT plate_number, current_color, target_color FROM paint_jobs WHERE status = 'in_progress'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["plate_number"] . "</td>";
                    echo "<td>" . $row["current_color"] . "</td>";
                    echo "<td>" . $row["target_color"] . "</td>";

                    echo "<td><form action='mark.php' method='post'><input type='hidden' name='plate_number' value='" . $row["plate_number"] . "'/><input type='submit' value='Mark as Completed'/></form></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No paint jobs found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>


    <div class="shop-performance">
        <h4>SHOP PERFORMANCE</h3>
            <ul id="shop-per">
                <li>Total Cars Painted: 48</li>
                <li>Breakdown:</li>
                <li>Blue: 24 </li>
                <li>Red: 21</li>
                <li>Green: 3</li>
            </ul>
    </div>

    <h2>Paint Queue</h2>
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
            // Database 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "car_db";


            $conn = new mysqli($servername, $username, $password, $dbname);


            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT plate_number, current_color, target_color FROM paint_jobs";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
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
</body>

</html>