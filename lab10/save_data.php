<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $data = $firstName . ' ' . $lastName . "\n";
    
    $filePath = '/home/opeyemivxp/webtechsavedata/data.txt'; // Define the path to your non-public folder.
    
    // Append data to the file.
    if (file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo 'Data saved successfully.';
    } else {
        echo 'Error saving data.';
    }
} else {
    echo 'Invalid request.';
}
?>
