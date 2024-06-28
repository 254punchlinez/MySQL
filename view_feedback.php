<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #E6E6FA;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Feedback Received</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Rating</th>
            <th>Submission Date</th>
        </tr>
        <?php
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

        // Retrieve data from feedback table
        $sql = "SELECT id, name, email, feedback, rating, submission_date FROM feedback";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["email"]. "</td>
                        <td>" . $row["feedback"]. "</td>
                        <td>" . $row["rating"]. "</td>
                        <td>" . $row["submission_date"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No feedback found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
