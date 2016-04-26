<?php
/** See http://php.net/manual/en/function.fopen.php */
$file = 'filetest.txt';

/** w - writes the file to filetest.txt */
if ($handle = fopen($file, 'w')) {
    fwrite($handle, 'abc'); //returns number of bytes or false
    $content = "123\n456"; //double quotes matter (with\n);
    fwrite($handle, $content);

    fclose($handle);
} else {
    echo "Could not open file for writing";
}

/**
 * File_put_contents: shortcut for fopen/frite/fclose
 *
 * Overwrites existing file by defult (so be CAREFUL)
 */
$file = 'filesize.txt';
$content = "111\n222\n333";
if ($size = file_put_contents($file, $content)) {
    echo "A file of {$size} bytes was created.";
}
