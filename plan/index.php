<?php 

define('ROOT', dirname(__FILE__));
require ROOT.'/app/components/Router.php';


$r = new Router;

echo $r->getURL();







