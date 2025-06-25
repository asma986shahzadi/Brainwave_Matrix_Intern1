<?php
$conn = new mysqli("localhost","root","","booktable");

if ($conn == false) {
    echo "Database connection error";
} else {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $guest = $_POST["guest"];

    // INSERT QUERY
    $sql = "INSERT INTO `booking`(`id`,`fullname`,`email`,`date`,`time`,`guest`) VALUES (null,'$fullname','$email','$date','$time','$guest')";

    if (mysqli_query($conn,$sql)) {
        echo "
        <script>
       alert ('Your data is successfully submitted');
       window.location.href = 'home.html';
       </script>
        ";
    } else {
        echo "error:" . mysqli_error($conn);
    }
    
}




?>