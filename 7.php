<?php
$filename = 'input.txt';
$initialContent = readline("Enter the initial content to write to the file: ");
file_put_contents($filename, $initialContent . "\n");
echo "Contents of the file after creation:\n";
echo file_get_contents($filename);
$additionalContent = readline("Enter additional content to append to the file: ");
file_put_contents($filename, $additionalContent . "\n", FILE_APPEND);
echo "\nContents of the file after appending:\n";
echo file_get_contents($filename);
?>