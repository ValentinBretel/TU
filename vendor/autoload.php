<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

require_once __DIR__ .'src/Email.php';
require_once __DIR__ .'tests/EmailTest.php';

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new Email('bart.simpson@outlook.com');
$obj2 = new EmailTest(); 

return ComposerAutoloaderInit7c2cd7b71af6aef9402abee1840b006f::getLoader();
