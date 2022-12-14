<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Listing</title>
</head>
<body>
    <h1 class="display-1 text-center text-primary">User Data</h1>

    <div class="container">
      <h1>Added to Stack</h1>

      <div class="row">
  

<!-- 
    NOTE: this is our backend (server side) code. 
    1. User cannot see this code -- unlike HTML/CSS/JavaScript
    2. This is how we will do database opperations (DB is also on server)
-->  

<?php
// DYNAMIC HTML
$firstname = $_GET['apiFirst'];
$lastname = $_GET['apiLast'];
$city = $_GET['apiCity'];
$country = $_GET['apiCountry'];
echo "<div class='col-lg alert alert-info'><p><strong>$firstname</strong> has been added.</p></div>";


// DATABASE OPERATIONS:
// https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "user73";
$password = "73grab";
$dbname = "db73";

// Create connection (assuming these exist -- we set up the DB on the CLI)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL OPPERATIONS
$sql = "INSERT INTO randusers VALUES ('$firstname', '$lastname', '$city', '$country')";

if ($conn->query($sql) === TRUE) {
  echo "<div class='col-lg alert alert-success'><p>New record created successfully</p></div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

  </div>
  </div>
  <div class="container">
    <table class="table table-striped table-hover">
        <thread>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
            <th>Country</th>
          </tr>
        </thread>
        <tbody>

  <?php

// modified from https://www.w3schools.com/php/php_mysql_select.asp
$sql = "SELECT first, last, city, country from randusers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["first"]."</td><td>".$row["last"]."</td><td>".$row["city"]."</td><td>".$row["country"]."</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
    </tbody>
    </table>
    <br><br>
    <button class="btn btn-lg btn-primary active" onclick="history.back()">Back</button>
</div>

<div class="mt-4 p-5 bg-warning text-black rounded">
  <h1>Bootstrap Explanation</h1>
  <ul>
    <li>Centered enlarged, and colored the <strong>User Data</strong> Text</li>
    <li>Added container classes around both the table and headings/alerts</li>
    <li>Used alerts for the person added as well as indicating a new record</li>
    <li>Used a zebra striped hover table</li>
    <li>Enlarged the <strong>Back</strong> button and made it primary active</li>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
