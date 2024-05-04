<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet link -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="background-image">
    <div class="container mt-3 p-4">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-white p-4 pb-5 rounded shadow sign-width h-75 bg-sign">
                <div class="text-center mb-3">
                    <img class="img-fluid w-25" src="https://shorturl.at/qKMO6" alt="Logo"> <!-- Placeholder logo -->
                </div>
                <form id="signupForm" method="post" action="signup.php" onsubmit="return validateForm()">
                    <div class="mb-2">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your first name" required>
                    </div>
                    <div class="mb-2">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your last name" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-2">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="termsCheckbox" required>
                        <label class="form-check-label" for="termsCheckbox">I agree to the <a href="#">terms of service</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password != confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>