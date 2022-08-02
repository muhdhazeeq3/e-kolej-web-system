<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51I6q4mLv8g6axRSt3w2u2b0CTUEv5aU51Tv5lxk7eoXRTJTdVwfh2iWMqnHE25MiAe4YHnz09xaX00L2kveK1V3U00gL6TXx9w",
        "publishableKey" => "pk_test_51I6q4mLv8g6axRStGmdqChSJp0zaJhoVbEo69tA6TkhBaarEpdNUkH0gEaOfmkHuwkqTAZbf5nzUvNSBIJOSRFeK00FF4hruM0"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>