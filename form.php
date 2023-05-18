<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "my-database";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO userdetails (username, useremail)
// VALUES ('John', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "my-data";

// // Create Connection........
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check Connection.........
// if ($conn->connect_error) {
//   die("Connection Failed" . $conn->connect_error);
// }

// $sql = "INSERT INTO useroutput (username, useremail)
// VALUES ('Ahmed', 'hussainyousaf83@gmail.com')";
// if ($conn->query($sql) === TRUE) {
//   echo "New Record Created Successfully";
// } else {
//   echo "Error" . $sql . "<br>" . $conn->error;
// }
// $conn->close();




// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "my-database";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// $user_name = $_POST['userName'];
// $user_email = $_POST['userEmail'];
// $sql = "INSERT INTO userdetails (userName, userEmail)
// VALUES ('$user_name', '$user_email')";

// if ($conn->query($sql) === TRUE) {
//   // echo "New record created successfully";
//   header('Location: index.html');
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "my-data";

// // Create Connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check Connection
// if ($conn->connect_error) {
//   die("Connection Failed" . $conn->connect_error);
// }
// $user_name = $_POST['userName'];
// $user_email = $_POST['userEmail'];
// $user_password = $_POST['user_Password'];
// $sql = "INSERT INTO useroutput (username, useremail, user_password)
// VALUES ('$user_name', '$user_email', '$user_password')";
// if ($conn->query($sql) === TRUE) {
//   echo "Congratulations";
// }else {
//   echo "Error" . $sql . "<br>" . $conn->error;
// }
// $conn->close();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newdata";

// Create a conection.............
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection...............
if ($conn->connect_error) {
  die("connection failed". $conn->connect_error);
}
$user_name = $_POST['userName'];
$user_email = $_POST['userEmail'];
$user_password = $_POST['user_Password'];
$sql = "INSERT INTO userdata (user_name, userEmail, user_password) 
VALUES ('$user_name', '$user_email', '$user_password')";
if ($conn->query($sql) === TRUE) {
  echo "COnratulation";
}else {
  echo "Error" . $sql . "<br>" . $conn->error;
}
$conn->close();
