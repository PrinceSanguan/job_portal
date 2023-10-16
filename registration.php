<?php
include("connection.php");

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        // Username or password is empty, display an error message
        echo "Please fill in all fields.";
    } else {
        // Both username and password are filled, proceed with registration
        $sql = "INSERT INTO joblisting (user, password) VALUES ('$username', '$password')";

        try {
            if (mysqli_query($conn, $sql)) {
                // Redirect to the congratulatory page
                header("Location: successfulPage.php");
                exit;
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

mysqli_close($conn);
?>