<?php

// if Post is received
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Declare variable
    $number = $_POST['number'];

    // Checks that a number is positive.
    function is_positive($check_number)
    {
        if ($check_number > 0) {
            // Return nothing as per task instruction

        } else {
            throw new Exception('The number is negative');
        }
    }
    
    // Checks that a number is divisible by five.
    function is_divisible($check_number)
    {
        if (($check_number % 5) === 0) {
            // Return nothing as per task instruction
        } else {
            throw new Exception('The number is not divisible by 5.');
        }
    }

    // Checks that the number has at least 4 digits.
    function enough_digits($check_number)
    {
        if (strlen($check_number) >= 4) {
            // Return nothing as per task instruction
        } else {
            throw new Exception('The number has less than 4 digits.');
        }
    }

    // One try block and a connected catch block for each of the potential exceptions
    try {
        is_positive($number);
    } catch (Exception $e) {
        echo '<p> Caught error: ' . $e->getMessage() . '</p>';
    }
    try {
        is_divisible($number);
    } catch (Exception $e) {
        echo '<p> Caught error: ' . $e->getMessage() . '</p>';
    }
    try {
        enough_digits($number);
    } catch (Exception $e) {
        echo '<p> Caught error: ' . $e->getMessage() . '</p>';
    }
} else {
    echo '<p> Caught error: No Post was received. </p>';
}