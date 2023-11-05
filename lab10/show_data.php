<?php
// Specify the path to the data file
$filePath = '/var/www/html/opeyemivxp.azurewebsites.net/non-public-folder/data.txt';

// Read the data from the file into an array
$dataArray = file($filePath, FILE_IGNORE_NEW_LINES);

// Create an HTML table to display the data
echo '<table>';
foreach ($dataArray as $data) {
    echo '<tr><td>' . $data . '</td></tr>';
}
echo '</table>';
?>
