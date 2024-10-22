<?php
include('db.php');
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
        // Password hashing for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into the database
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            header("Location: login.php"); // Redirect to login page after successful sign-up
        } else {
            $signupErr = 'Username or email already taken.';
        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Sign Up</title>
</head>

<body>
    <h2>Sign Up</h2>

    <?php if (!empty($signupErr)): ?>
        <p style="color: red;"><?php echo $signupErr; ?></p>
    <?php endif; ?>

    <form method="POST" action="signup.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br>

        <button type="submit">Sign Up</button>
    </form>
</body>

</html>