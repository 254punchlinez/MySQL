<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #E6E6FA;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["feedbackForm"]["name"].value;
            var email = document.forms["feedbackForm"]["email"].value;
            var feedback = document.forms["feedbackForm"]["feedback"].value;
            var rating = document.forms["feedbackForm"]["rating"].value;
            if (name == "" || email == "" || feedback == "" || rating == "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h2>Submit Your Feedback</h2>
        <form name="feedbackForm" action="submit_feedback.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating (1-5):</label>
                <input type="text" id="rating" name="rating">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
