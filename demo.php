<?php
error_reporting(E_ALL);
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "my_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM question";
$result = $conn->query($sql);
$r2   = array($result);
if ($result->num_rows > 0) 
   {
        while($row = $result->fetch_assoc()) 
	{
            echo "id: $row['q_id'] <br>";
	}
   } 
  else {
    echo "0 results";              
}

$row = $r2->fetch_assoc();
echo "<pre>";
print_r($row);

$conn->close();

