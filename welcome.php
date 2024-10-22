<?php
session_start();

include('index.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Hotel Ni Tito</title>

    <style>
        /* Style for header */
        .header {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #e0e0e0;
        }

        .header-top img {
            display: block;
            margin: 0 auto;
        }

        .logo h2 {
            margin: 10px 0;
            font-size: 24px;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .logo p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Styled Logout Button */
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #f44336;
            /* Red color */
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
            /* Darker red on hover */
        }
    </style>

</head>

<body>
    <div class="header">
        <div class="wrap">
            <div class="header-top">
                <div class="logo">
                    <!-- Placed image inside the header -->
                    <img src="images/welcome.png" width="500" height="120" alt="Welcome Image">
                    <!-- Username and success message -->
                    <h2>wwws<?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                    <p>You have successfully logged in.</p>
                    <!-- Styled Logout Button -->
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>