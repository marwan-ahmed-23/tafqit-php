<?php
require_once __DIR__ . '/../src/Tafqit.php';

$tafqit = new Tafqit();

try {
    $number = "٢٣٤٥"; // Input in Arabic numbers
    $text = $tafqit->numberToText($number, 'ar'); // Convert to Arabic words
    echo "Number in text: $text\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
