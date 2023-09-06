<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNumber = $_POST["mobile"]; // Use the correct field name from your HTML form


    // Validate and sanitize the form data (perform necessary checks)

    // Database connection settings
    $servername = "localhost"; // Replace with your MySQL server name
    $username = "u339725174_maisonform1"; // Replace with your MySQL username
    $password = "Maison@123"; // Replace with your MySQL password
    $dbname = "u339725174_maisonform"; // Replace with your MySQL database name

    try {
        // Create a new PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the database query
        $stmt = $conn->prepare("INSERT INTO ContactForm1 (name, email, contact_number) VALUES (:name, :email, :contactNumber)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contactNumber', $contactNumber);
        $stmt->execute();

        // Close the database connection
        $conn = null;

        // Redirect to a success page
        header("Location: success.html");
        exit;
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
        exit;
    }
}
?>