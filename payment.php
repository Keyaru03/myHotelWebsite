<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_SESSION['payment_complete'] = true;

    header("Location: signup.php");
    exit;
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
            background-color: #f4f4f9;
        }

        .payment-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
        }

        .benefits-list {
            text-align: left;
            margin: 20px 0;
        }

        .benefits-list li {
            margin: 10px 0;
        }

        .payment-buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .pay-now {
            background-color: #007bff;
            color: white;
        }

        .pay-now:hover {
            background-color: #0056b3;
        }

        .cancel {
            background-color: #dc3545;
            color: white;
        }

        .cancel:hover {
            background-color: #c82333;
        }
    </style>
</head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<body>
    <div class="payment-container">
        <h2>Complete Your Payment</h2>
        <p>To proceed with your Membership, please make a payment of ₱5500.</p>

        <!-- Benefits Section -->
        <h3>Benefits of Hotel Membership</h3>
        <ul class="benefits-list">
            <li>Exclusive discounts on all room bookings.</li>
            <li>Priority access to premium rooms and suites.</li>
            <li>Free upgrades based on availability.</li>
            <li>Early check-in and late check-out options.</li>
            <li>Access to members-only events and promotions.</li>
            <li>Complimentary breakfast and spa vouchers.</li>
            <li>Dedicated customer support for members.</li>
        </ul>

        <form method="POST" action="payment.php">
            <div class="payment-buttons">
                <button type="submit" class="pay-now">Pay Now</button>
                <button type="button" class="cancel" onclick="window.location.href='index.php'">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>