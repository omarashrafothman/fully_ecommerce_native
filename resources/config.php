<?php
ob_start();
session_start();
defined("DS") or define("DS", DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") or define("TEMPLATE_FRONT", __DIR__ . DS . "template" . DS . "front" . DS);
defined("TEMPLATE_BACK") or define("TEMPLATE_BACK", __DIR__ . DS . "template" . DS . "back" . DS);




// defined("TEMPLATE_Back") or define("TEMPLATE_Back", __DIR__ . DS . "templates\\back");
defined("DB_HOST") or define("DB_HOST", "localhost");
defined("DB_USER") or define("DB_USER", "root");
defined("DB_PASSWORD") or define("DB_PASSWORD", "");
defined("DB_NAME") or define("DB_NAME", "ecom_db");




$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// require_once(__DIR__ . DS . "resources" . DS . "functions.php");

require_once("functions.php");