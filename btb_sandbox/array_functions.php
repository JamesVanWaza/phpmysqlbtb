<?php
include_once 'html5req.php';
    echo "<h1 class='text-center'>Array Functions Examples</h1>";
    echo "<div class='row'>";
        echo "<div class='large-6 columns medium-6 columns small-12 columns'>";
    echo '<h2>Array</h2>';
    $numbers = array(1, 2, 3, 4, 5, 6);
    echo "<pre>";
    print_r($numbers);
    echo "</pre> . <hr>";

//shifts first element out of an array and returns it
echo '<h2>Array Shift</h2>';
$a = array_shift($numbers);
echo "a: " . $a . "<br>";
echo "<pre>";
    print_r($numbers);
    echo "</pre> . <hr>";

//prepends an element to an array and returns the element count
echo '<h2>Array Pop</h2>';
$b = array_unshift($numbers, 'first');

/** Counts the number in the array */
echo "b: " . $b . "<br>";
echo "<pre>";
    print_r($numbers);
    echo "</pre> . <hr>";

//pops last element out of an array
echo '<h2>Array Pop</h2>';
$c = array_pop($numbers);
echo "c: " . $c . "<br>";
echo "<pre>";
    print_r($numbers);
    echo "</pre> . <hr>";

//pushes an element onto the end of an array, returns the element count
echo '<h2>Array Push</h2>';
$d = array_push($numbers, 'last');
echo "d: " . $d . "<br>";
echo "<pre>";
    print_r($numbers);
    echo "</pre> . <hr>";
        echo "<div>"; //Closing the large-6 medium-6 small-12 columns
    echo "</div>"; // Closing the row class
?>