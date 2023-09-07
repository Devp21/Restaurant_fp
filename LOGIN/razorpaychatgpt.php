<?php

require 'razorpay-php'; // Include the Razorpay PHP SDK

use Razorpay\Api\Api;

$api = new Api('YOUR_KEY_ID', 'YOUR_KEY_SECRET'); // Your Razorpay Key ID and Secret Key

$amount = 1000; // Amount in paisa
$order = $api->order->create(array(
    'amount' => $amount,
    'currency' => 'INR',
    'payment_capture' => 1
));

$orderId = $order['id'];

$payment = $api->payment->create(array(
    'amount' => $amount,
    'currency' => 'INR',
    'payment_capture' => 1,
    'order_id' => $orderId
));

$paymentId = $payment['id'];
$razorpayPaymentLink = $payment['short_url']; // This is the payment link which you can redirect the user to.

// After the user completes the payment, you can capture the payment by using the following code:

$payment = $api->payment->fetch($paymentId);
$capture = $payment->capture(array('amount' => $amount));

// The payment is now captured and you can perform any further actions as needed.
