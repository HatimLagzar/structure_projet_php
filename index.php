<?php
require_once 'app/Autoloader.php';
Autoloader::register();

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

$content = ob_get_contents();
require_once 'pages/template.php';