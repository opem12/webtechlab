<?php


if (isset($_COOKIE['cs4413'])) {
    echo " cookie 'cs4413' is already set value - " . $_COOKIE['cs4413'];
} else {
    
    $cookieValue = "cs4413"; 
    $expirationTime = time() + 3600; 

    setcookie('cs4413', $cookieValue, $expirationTime);

    echo "cookie 'cs4413' has been set value - " . $cookieValue;
}

?>
