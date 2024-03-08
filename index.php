<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Paint Jobs</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-title"><b>JUAN'S AUTO PAINT</b></div>
    <ul id="nav">
        <li><a href="index.php">NEW PAINT JOB</a></li>
        <li><a href="paintjobs.php">PAINT JOBS</a></li>

    </ul>

    <div id="newPaintJobPage" class="page">
        <h1 align="center">New Paint Job</h1>
        <div id="carImages">
            <img id="leftCar" src="img/default.png" alt="Left Car">
            <img id="arrow" src="img/grayarrow.png" alt="Arrow" style="width: 10%; margin-bottom: 4%;">
            <img id="rightCar" src="img/default.png" alt="Right Car">
        </div>
    </div>

    <form id="paintJobForm" action="submit.php" method="post">
        <h2>Car Details</h2>
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

    <script src="js/script.js"></script>
</body>

</html>