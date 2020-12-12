<?php
require_once 'app/Autoloader.php';
Autoloader::register();

/**
 * Autoloader to help you do instance of your classes on app/ without require the files
 * eg. $db = new Database(); with no require will works
 */

// $db = new Database('blog', 'localhost', 'root', '');

/**
 * Add any verifications like is user authentified or not here
 * or is the page private for guest or not
 * sessions ...
 */

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

ob_start();

if (file_exists('pages/' . $page . '.php')) {
    require_once 'pages/' . $page . '.php';
} else {
    require_once 'pages/404.php';
}

$content = ob_get_clean();
require_once 'pages/template.php';
