<?php
session_start();
include('db.php');

// Check if payment is complete before showing the signup form
if (!isset($_SESSION['payment_complete']) || $_SESSION['payment_complete'] !== true) {
    header("Location: payment.php"); // Redirect to payment page if payment is not complete
    exit;
}

$signupErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic validations
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $signupErr = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signupErr = 'Invalid email format.';
    } elseif ($password !== $confirm_password) {
        $signupErr = 'Passwords do not match.';
    } else {
        // Check if email or username already exists
        $check_stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
        $check_stmt->bind_param("ss", $email, $username);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            $signupErr = 'Username or email already taken.';
        } else {
            // Password hashing for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into the database
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                // Clear the session payment flag after successful registration
                unset($_SESSION['payment_complete']);
                header("Location: login.php"); // Redirect to login page after successful sign-up
                exit;
            } else {
                $signupErr = 'An error occurred during registration.';
            }

            $stmt->close();
        }

        $check_stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Sign Up</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('../images/signup-bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signup-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .signup-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>

        <!-- Display error message if there is one -->
        <?php if (!empty($signupErr)): ?>
            <p class="error"><?php echo $signupErr; ?></p>
        <?php endif; ?>

        <form method="POST" action="signup.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required>

            <button type="submit" class="signup-btn">Sign Up</button>
        </form>
    </div>
</body>

</html>