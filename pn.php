<?php
$email = $_POST["email"];
$password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);
$name = $_POST["name"];
$location = $_POST["location"];
$Discribtion = $_POST["Discribtion"];
$Priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
// $terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

// if (!$terms) {
//     die("checkbox must be checked");
// }
// ;
// echo"<br>";

$host = "localhost";
$dataname = "user-info";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dataname);
if (mysqli_connect_errno()) {
    die("connection filed" . mysqli_connect_error());
}

echo '<br>';
$sql = "INSERT INTO `us-data`(`email`, `password`, `name`, `location`, `Discribtion`, `Priority`) VALUES
(? , ? , ? , ? , ? , ?  )";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sisssi", $email, $password, $name, $location, $Discribtion, $Priority);

mysqli_stmt_execute($stmt);