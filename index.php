<?php
/**
 * A simple, clean and secure PHP Login Script / MINIMAL VERSION
 * For more versions (one-file, advanced, framework-like) visit http://www.php-login.net
 *
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 *
 * @author Panique
 * @link https://github.com/panique/php-login-minimal/
 * @license http://opensource.org/licenses/MIT MIT License
 */

require_once("libraries/password_compatibility_library.php");

// include the configs / constants for the database connection
require_once("config/db.php");
require_once("config/configuration.php");
// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

    if ($login->isUserLoggedIn() == true) {
        
        include("views/logged_in.php");

    }

    else {

        include("views/not_logged_in.php");
        
    }
?>