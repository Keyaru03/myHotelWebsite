<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['pay'])) {
        $_SESSION['payment_complete'] = true;
        header("Location: signup.php");
        exit;
    } elseif (isset($_POST['cancel'])) {
        header("Location: index.php"); // Redirect to homepage or another desired page
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Hotel</title>
    <style>
    /* Style for the payment page */
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .payment-container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }

    button {
        padding: 12px 20px;
        font-size: 16px;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin: 5px;
    }

    .pay-btn {
        background-color: #007bff;
    }

    .pay-btn:hover {
        background-color: #0056b3;
    }

    .cancel-btn {
        background-color: #dc3545;
    }

    .cancel-btn:hover {
        background-color: #c82333;
    }
    </style>
</head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<body>
    <div class="payment-container">
        <h2>Complete Your Payment</h2>
        <p>To proceed with your Membership, please make a payment of ₱5500.</p>
        <form method="POST" action="payment.php">
            <button type="submit" name="pay" class="pay-btn">Pay Now</button>
            <button type="submit" name="cancel" class="cancel-btn">Cancel</button>
        </form>
    </div>
</body>

</html>