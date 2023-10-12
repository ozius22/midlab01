<?php

echo "<h1>Odd or Even Number Checker</h1>";

$givenNumber = "8";

if (is_numeric($givenNumber)) {
    if ($givenNumber % 2 === 0) {
        echo "<h2>$givenNumber is an even number!</h2>";
    } else {
        echo "<h2>$givenNumber is an odd number!</h2>";
    }
} else {
    echo "<h2>Not a valid number!</h2>";
}