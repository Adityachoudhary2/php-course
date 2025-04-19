<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect data from form
    $name   = $_POST['name'];
    $number = $_POST['number'];
    $email  = $_POST['email'];
    $course = $_POST['course'];
    $city   = $_POST['city'];

    // Include database connection file
    include("config.php");

    try {
        // Prepare and execute insert
        $stmt = $conn->prepare("
            INSERT INTO students (name, number, email, course, city) 
            VALUES (:name, :number, :email, :course, :city)
        ");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':course', $course);
        $stmt->bindParam(':city', $city);

        $stmt->execute();

        echo "✅ Data Inserted Successfully";

        // Send confirmation email to user
        $subject = "Thanks for registering!";
        $message = "Hi $name,\n\nThank you for registering for the $course course.\nWe will contact you soon!\n\n- AspireCademy Team";
        $headers = "From: info@aspirecademy.com";

        // Send email (won’t work on localhost by default)
        mail($email, $subject, $message, $headers);

    } catch (PDOException $e) {
        echo "❌ Error: " . $e->getMessage();
    }

} else {
    echo "❌ Invalid Request";
}
?>
