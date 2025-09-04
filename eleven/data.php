<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    echo "You entered: " . htmlspecialchars($name);

    $file = fopen("data.txt", "a");  
    fwrite($file, $name . "\n");     
    fclose($file);                   
}
?>
