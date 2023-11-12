<?php

// Check if the cookie is already set
if (isset($_COOKIE['cs4413'])) {
    echo "The cookie 'cs4413' is already set with the value: " . $_COOKIE['cs4413'];
} else {
    // Set the cookie with a value and expiration time (e.g., 1 hour from now)
    $cookieValue = "YourCookieValue"; // You can replace this with the desired value
    $expirationTime = time() + 3600; // 1 hour from now

    setcookie('cs4413', $cookieValue, $expirationTime);

    echo "The cookie 'cs4413' has been set with the value: " . $cookieValue;
}

?>
