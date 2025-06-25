<?php
$conn = new mysqli("localhost", "root", "", "contact");

if ($conn == false) {
    echo "Database not connected";
} else {
    $yourname = $_POST["yourname"];
    $youremail = $_POST["youremail"];
    $message = $_POST["message"];

    // INSERT QUERY
    $sql = "INSERT INTO `con` (`id`, `yourname`, `youremail`, `message`) VALUES (null, '$yourname', '$youremail', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "
        <script>
        alert('Your data is successfully submitted');
        window.location.href = 'home.html';
        </script>
        ";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
