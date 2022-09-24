<?php

// Reusable Quote printing function
function printMyQuote($quote, $number = 1) {
    echo "$number. " . $quote["text"] . "\n";
    echo "Author: " . $quote["author"] . "\n";
}

// Starting state
$command = 0;
$Quotes = [];

// Run program while user doesn't enters "0"
do {

    // Give instructions to user:
    echo "----\n";
    echo "press 0 to exit \n";
    echo "press 1 to add new quote \n";
    echo "press 2 to get list of all quotes\n";
    echo "press 3 to random quote \n";

    // Read user input and store in command variable
    $command = readline();

    // Use switch to answer user's input
    switch ($command) {
        // Add new quote case
        case 1:
            // Take input from user and store in array $quote
            echo "Enter quote: \n";
            $quote["text"] = readline();
            echo "Enter author: \n";
            $quote["author"] = readline();
            // Append (add) new array ($quote) in state array of quotes ($Quotes)
            $Quotes[] = $quote;
            break;

        // Print list of quotes case
        case 2:
            foreach ($Quotes as $index => $quote) {
                // Get position (number) of quote from index (if index = 0, position = 1)
                $number = $index + 1;
                // Print quote using custom function
                printMyQuote($quote, $number);
                // Print dashes just as separator
                echo "----- \n";
            }
            break;

        // Get random quote case
        case 3:
            // Count quotes
            $count = count($Quotes);
            // Get random index in range from 0 to max index (count-1)
            $index = rand(0, $count-1);
            // Print quote using custom function
            printMyQuote($Quotes[$index], $index+1);
            break;

        case 0:
            echo "Bye! \n";
            break;

        default:
            // Warn if user gave disallowed input
            echo "Command not recognized, allowed only 0, 1, 2 and 3 \n";
            break;
    }

} while ($command != 0);
