<!DOCTYPE html>
<html>
    <head>
        <!-- head definitions go here -->

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meripropertyparatice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

require_once "config.php";
$yourname = $_POST["yourname"]; 
$fans = $_POST["fans"]; 
$lights = $_POST["lights"]; 
$numberofunits = $_POST["numberofunits"]; 


$sql = "INSERT INTO billapp (yourname, fans, lights, numberofunits)
VALUES ('$yourname', '$fans', '$lights', '$numberofunits')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>    

     </head>
    <body>

<br><br><br><br>
<center>

<form action="" method="get">
Enter Name:
<input type="text" name="yourname">
<br>
Enter No Of Fans:
<input type="number" name="fans">
<br>
Enter No Of Lights:
<input type="number" name="lights">
<br>
Enter No Of Units(check from meter):
<input type="number" name="numberofunits">
</center>

<input type="submit" name="submit" Value="Submit">
</form>


  </body>
</html>