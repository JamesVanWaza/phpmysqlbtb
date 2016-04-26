<?php
/**
 * Close files first. Can't delete open files
 *
 * Must have permission on the folder containing the file.
 *
 */

/** Delete files (carefully) with */
unlink("filetest.txt");
