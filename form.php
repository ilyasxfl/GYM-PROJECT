
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $card_id = "";
    $name = "";
    $email = "";
    $message = "";

    // Check if the variable is set before using it
    if (isset($_POST["card_id"])) {
        $card_id = $_POST["card_id"];
    }

    if (isset($_POST["name"])) {
        $name = $_POST["name"];
    }

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }

    if (isset($_POST["message"])) {
        $message = $_POST["message"];
    }

    // Create a database connection (assuming $conn is your MySQLi connection object)
    $conn = new mysqli("localhost", "root", "", "omarcoaching");
    
    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Add your database insertion logic here, including $card_id in your SQL query
    $sql = "INSERT INTO users (card_id, fullname, email, textmessage)
            VALUES ('$card_id', '$name', '$email', '$message')";

    // Execute the SQL query and handle errors
    if ($conn->query($sql) === true) {
        echo "Thank you for submitting the form!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>




