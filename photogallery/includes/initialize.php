<?php
/**
 * Define the core paths
 *
 * Define them as absolute paths to make sure that require_once works as expectex
 *
 * DIRECTORY_SEPARATOR is a PHP pre-defined constant
 * (\for Windows, /for Unix)
 * Using Mac so it should be like this - /Users/jamesvanwaza/Dropbox/Apps/MAMP PRO/2017/September/phpmysqlbtb/photogallery'
 */

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null :
define('SITE_ROOT', DS . 'Users' . DS . 'jamesvanwaza' . DS . 'Dropbox' . DS . 'APPS' . DS . 'MAMP PRO' . DS . '2017' . DS . 'September' . 'phpmysqlbtb' . DS . 'photogallery');

/** Load config file first */
require_once 'config.php';

/** Load basic functions next so that everything after can use them */
require_once 'functions.php';

/** Load basic core objects */
require_once 'session.php';
require_once 'database.php';
require_once 'databaseobject.php';

/** Load database-related classes */
require_once 'user.php';
require_once 'photograph.php';
