<?php
require_once 'connection.php';
$sql = "INSERT INTO `mytable` (`id`, `name`, `password`, `image`) VALUES (NULL, '$personName', '$pswd2', '$fileDestination')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>