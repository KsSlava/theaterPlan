<?php 

define('ROOT', dirname(__FILE__));
require ROOT.'/app/components/Router.php';




$a = new Router;

print_r ($a->run());




