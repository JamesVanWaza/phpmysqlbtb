<div class="row">
    <div class="large-6 medium-6 small-12 columns">
<?php
    include_once('html5req.php');
    echo "<h3 class='text-center'>" . "Today's date is "  . date('M d Y') . "</h3>";
    echo date('d') . '<br>' ; /*Day of the month, 2 digits with leading zeros*/
    echo date('D') . '<br>' ; /*A textual representation of a day, three letters*/
    echo date('j') . '<br>' ; /*Day of the month without leading zeros*/
    echo date('l') . '<br>' ; /*A full textual representation of the day of the week*/
    echo date('N') . '<br>' ; /*ISO-8601 numeric representation of the day of the week (added in PHP 5.1.0)*/
    echo date('S') . '<br>' ; /*English ordinal suffix for the day of the month, 2 characters*/
    echo date('w') . '<br>' ; /*Numeric representation of the day of the weeks*/
    echo date('z') . '<br>' ; /*The day of the year (starting from 0)*/
    echo date('W') . '<br>' ; /*ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)*/
    echo date('F') . '<br>' ; /*A full textual representation of a month, such as January or March*/
    echo date('m') . '<br>' ; /*Numeric representation of a month, with leading zeros*/
    echo date('M') . '<br>' ; /*A short textual representation of a month, three letters*/
    echo date('n') . '<br>' ; /*Numeric representation of a month, without leading zeros*/
    echo date('L') . '<br>' ; /*Whether it's a leap year*/
    echo date('o') . '<br>' ; /*ISO-8601 year number. This has the same value as Y, except that if the ISO week number (W) belongs to the previous or next year, that year is used instead. (added in PHP 5.1.0)*/
    echo date('Y') . '<br>' ; /*A full numeric representation of a year, 4 digits*/
    echo date('y') . '<br>' ; /*A two digit representation of a year*/
    echo date('a') . '<br>' ; /*Lowercase Ante meridiem and Post meridiem*/
    echo date('A') . '<br>' ; /*Uppercase Ante meridiem and Post meridiem*/
    echo date('B') . '<br>'; /*Swatch Internet time*/
    echo date('g') . '<br>' ; /*12-hour format of an hour without leading zeros*/
    echo date('G') . '<br>' ; /*24-hour format of an hour without leading zeros*/
    echo date('h') . '<br>'; /*12-hour format of an hour with leading zeros*/
    echo date('H') . '<br>'; /*24-hour format of an hour with leading zeros*/
    echo date('i') . '<br>'; /*Minutes with leading zeros*/
    echo date('s') . '<br>'; /*Seconds, with leading zeros*/
    echo date('u') . '<br>'; /*Microseconds (added in PHP 5.2.2). Note that date() will always generate 000000 since it takes an integer parameter, whereas DateTime::format() does support microseconds.*/
    echo date('I') . '<br>'; /*Whether or not the date is in daylight saving time*/
    echo date('O') . '<br>'; /*Difference to Greenwich time (GMT) in hours*/
    echo date('P') . '<br>'; /*Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)*/
    echo date('T') . '<br>'; /*Timezone abbreviation*/
    echo date('Z') . '<br>'; /*Timezone offset in seconds. The offset for timezones west of UTC is always negative, and for those east of UTC is always positive.*/
    echo date('c') . '<br>'; /*ISO 8601 date (added in PHP 5)*/
    echo date('r') . '<br>'; /*formatted date*/
    echo date('U') . '<br>'; /*Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)*/
?>
    </div>
</div>