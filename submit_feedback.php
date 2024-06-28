<?php
// Capture form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into feedback table
$sql = "INSERT INTO feedback (name, email, feedback, rating, submission_date) VALUES ('$name', '$email', '$feedback', '$rating', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Record successfully added');
            window.location.href = 'feedback_form.php';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
