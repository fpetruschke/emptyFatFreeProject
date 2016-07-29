<?php
/**
 * @author  Florian Petruschke <florian.petruschke@gmail.com>
 * @date    29.02.16  -  08:11
 * @version 1.0
 */

// following four lines must be included for autoloading and routing
require ("vendor/autoload.php");
$f3 = \Base::instance();
$f3->config("app/config/config.ini");
$f3->config("app/config/routes.ini");

// you absolutely MUST use the 'run'-method to get things going!
$f3->run();