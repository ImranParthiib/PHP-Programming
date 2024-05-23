<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Message</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center rounded-4 shadow-lg bg-danger p-5">
        <?php
        // Check if the form is submitted and the name field is not empty
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"])) {
            // Capture the submitted name
            $name = $_POST["name"];
            // Display the personalized greeting message
            echo "<h1>😊</h1>";
            echo "<h1> Hello,<strong class='text-light'>$name!</strong></h1>";
            echo "<h1 class='text-secondary'>Let's go Coding</h1>";
        } else {
            // Display an error message if the form is not submitted or the name field is empty
            echo "<h1>Please enter your name.</h1>";
        }
        ?>
        </div>
    </div>
    
</body>
</html>
