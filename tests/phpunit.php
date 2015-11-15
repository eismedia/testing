<?php /* Developed by Eis */

function __autoload($class) {
    require __DIR__ . "/$class.php";
}
