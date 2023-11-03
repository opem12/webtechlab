<?php
$filePath = 'non-public-folder/data.txt'; // Define the path to your non-public folder.
if (file_exists($filePath)) {
    $fileContent = file($filePath, FILE_IGNORE_NEW_LINES);
    if (!empty($fileContent)) {
        echo '<table border="1">';
        echo '<tr><th>Full Name</th></tr>';
        foreach ($fileContent as $line) {
            echo '<tr><td>' . htmlspecialchars($line) . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo 'No data available.';
    }
} else {
    echo 'Data file not found.';
}
?>
