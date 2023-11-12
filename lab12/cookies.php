<?php


if (isset($_COOKIE['cs4413'])) {
    echo "The cookie 'cs4413' is already set with the value: " . $_COOKIE['cs4413'];
} else {
    
    $cookieValue = "cs4413"; 
    $expirationTime = time() + 3600; 

    setcookie('cs4413', $cookieValue, $expirationTime);

    echo "The cookie 'cs4413' has been set with the value: " . $cookieValue;
}

?>
