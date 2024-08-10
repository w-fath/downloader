<?php
include('../includes/koneksi.php');

$name = $_POST['name'];
$wa = $_POST['wa'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, wa, email, message) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $wa, $email, $message);

if ($stmt->execute()) {
    header("Location: contact_us.php?status=success"); 
} else {
    header("Location: contact_us.php?status=error");
}

$stmt->close();
$conn->close();
