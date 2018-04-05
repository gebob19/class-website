<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "deleteMe1";
$table="table1";

// Create connection
$conn = new mysqli("localhost", $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "SELECT id, firstname, lastname, age FROM ".$table;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$firstname=$row["firstname"];
    	$lastname=$row["lastname"];
    	$age=$row["age"];
    	$firstPart="<br>"."Welcome";
    	$urlPart="<a href=\"httpgetRequest.php?"."name=".$firstname."&age=".$age."\">";
        $messagePart=$firstname." ".$lastname;
        $urlEndPart="</a><br>";
        echo $firstPart.$urlPart.$messagePart.$urlEndPart;


    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>
