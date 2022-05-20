#!/usr/local/bin/php
<?php

header('Content-Type: text/plain');

// describe what you consider valid message text (minimum and maximum length, allowed characters, punctuation and symbols) -- display this text on the page

echo "Valid Message Text:" . PHP_EOL .
	"Length: 3-10 characters" . PHP_EOL .
	"Allowed Characters: A-Z, a-z, 0-9" . PHP_EOL .
	"Punctuation: .!" . PHP_EOL .
	"Symbols: No symbols" . PHP_EOL . PHP_EOL;

// create 5+ test cases against all the tests above(string which is too short, one which is too long (use a Lorem Ipsum generator) string which contains a valid message) -- display these test cases on the page, with some indication of which are valid and which are not
// create regular expression for use with your test cases (https://regex101.com/)

$testValues = ['Case 1' => 'hi', 'Case 2' => 'good morning my good sir', 'Case 3' => 'hello.', 'Case 4' => 'hello, and goodbye', 'Case 5' => 'hey!'];

echo 'Test Cases:' . PHP_EOL;
foreach ($testValues as $testCase) {
	echo $testCase;
	if (preg_match('/^[a-zA-Z0-9.!]{3,10}$/', $testCase)) {
		echo " [valid]" . PHP_EOL;
	} else {
		echo " [invalid]" . PHP_EOL;
	}
}

// write code to test each of the test cases, report results

foreach ($testValues as $testCase) {
	$match = trim(preg_match('/^[a-zA-Z0-9.!]{3,10}$/', $testCase));
	gettype($match);
}

?>