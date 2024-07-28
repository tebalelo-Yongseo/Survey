
<?php

$servername = "localhost";
$username = "root";
$password = 'password';
$dbname = "survey_database'";

// Start the session
session_start();

   // Connect to MySQL
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }

   // Retrieve form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $age_group = $_POST['age_group'];

   // Insert data into MySQL
   $sql = "INSERT INTO survey_data (name, email) VALUES ('$name', '$email', '$phone', '$address', '$age_group')";
   if ($conn->query($sql) === TRUE) {
       echo "Data inserted successfully";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

// Close the MySQL connection
$conn->close();



?>