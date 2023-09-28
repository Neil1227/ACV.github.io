$(document).ready(function() {             $('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});


<?php
if (isset($_POST["login"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin_acc";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the username and password from the user input using $_POST
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // SQL query to retrieve username and password data from admin_tbl based on user input
    $sql = "SELECT * FROM user_tbl WHERE username='$user' AND password='$pass'";
    
    $result1 = $conn->query($sql);

    if ($result1->num_rows > 0) {
        // Valid credentials
        header('Location: clientAdopt.php');
    } else {
        // Invalid credentials
        header("Location: clientDashboard.php?error= Incorrect Username or  Password ");
        header('refresh:2; url=clientDashboard.php');
    }

    $conn->close();
}
?>*/
