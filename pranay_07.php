<?php

$filename = readline("Enter the file name: "); // User enters file name
$operation = readline("Do you want to 'append' or 'write' new content? (Enter 'append' or 'write'): "); // User chooses the operation

if ($operation == "write" || $operation == "append") {
    // Get content to be written or appended
    $content = readline("Enter the content: ");
    
    // Step 1: Write new content or append based on user's choice
    if ($operation == "write") {
        $file = fopen($filename, "w"); // Open the file for writing (overwrite)
        if ($file) {
            fwrite($file, $content); // Write content
            fclose($file); // Close the file
            echo "File created and content written successfully.\n";
        } else {
            echo "Error: Unable to open the file for writing.\n";
        }
    } elseif ($operation == "append") {
        $file = fopen($filename, "a"); // Open
        if ($file) {
            fwrite($file, "\n" . $content); // Append
            fclose($file); // Close
            echo "Content appended to the file successfully.\n";
        } else {
            echo "Error: Unable to open the file for appending.\n";
        }
    }

    // Step 2: Display 
    if (file_exists($filename)) {
        $file_content = file_get_contents($filename); // Read
        echo "\nCurrent File Content:\n";
        echo "$file_content\n"; // Display
    } else {
        echo "No file exists yet.\n";
    }
} else {
    echo "Invalid operation. Please enter 'append' or 'write'.\n";
}
?>
