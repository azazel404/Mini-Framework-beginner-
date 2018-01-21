<?php

spl_autoload_register(function($class){
  require_once 'Core/'.$class.'.php';
});
//sesuai kan link path kalian
$GLOBALS['path'] = '/mini-framework/public';
