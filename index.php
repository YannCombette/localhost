<?php

// ===========================================================
// neceseary folders inclutions
// ===========================================================

// Librairies
require __DIR__ . '/inc/lib/kint.phar';
// connection MySQL
require __DIR__ . '/inc/db.php';
// functions
require __DIR__ . '/inc/functions.inc.php';
// database management
include __DIR__ . '/inc/data_form_db.php';

// ===========================================================
// page display management
// ===========================================================

// set the page to display by default
$pageToDisplay = 'home';

// set the page to display 
if (isset($_GET['page']) && $_GET['page'] !== '') {
    $pageToDisplay = $_GET['page'];
}

// home page display
if ($pageToDisplay === 'home') {
    $pageToDisplay = 'home';

// season page dispay  
} elseif ($pageToDisplay === 'season') {
    $pageToDisplay = $_GET['page'];

// day page display
} elseif ($pageToDisplay == 'day') {
    $pageToDisplay = $_GET['page'];

// error page or home page display
} else {
    $pageToDisplay = 'home';
}

// ===========================================================
// display Localhoste/
// ===========================================================

// header to display by default for all pages
require __DIR__ . '/inc/templates/header.tpl.php';

// page to displayed determined by 'pageToDisplay'
require __DIR__ . '/inc/templates' . '/' . $pageToDisplay . '.tpl.php';

// footer to display by default for all pages
require __DIR__ . '/inc/templates/footer.tpl.php';
