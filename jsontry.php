<?php
$servername = "xxxxxx";
$username = "xxxx";
$password = "xxx";
$dbname = "xxxxxxxx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM data ORDER BY id DESC LIMIT 0,200";
$result = $conn->query($sql);

    //create an array
    $earthquake = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $earthquake[] = $row;
    }
    echo json_encode($earthquake);

    
?>