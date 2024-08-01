<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $sql = "INSERT INTO users (name ,email , phone , age , city) VALUES ('$name' , '$email' , '$phone' , '$age', '$city')";
    // $sql =" INSERT INTO `users` (`id`, `name`, `email`, `phone`, `age`, `city`) VALUES (NULL, 'Hoda', 'hodaa.gohar@gmail.com', '01090948277', '21', 'El_Bjur')";
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
header("location: index.html");