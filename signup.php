<?php
include 'connect.php'; 

$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password']; 

$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

$run = mysqli_query($con, $query);

if ($run) {
    echo "Signup successful!";
} else {
    echo "Error inserting data: " . mysqli_error($con);
}
?>
