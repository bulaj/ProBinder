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


include("views/templates/header.php");
include("views/templates/sidebar.php");
// ... ask if we are logged in here:

if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
?>
    <section id="main">
        <?php include("views/logged_in.php"); ?>
    </section>
<?php
} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
?>
    <section id="main">
        <?php include("views/not_logged_in.php"); ?>
    </section>
<?php
}
include("views/templates/footer.php");