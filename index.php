<?php
define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

include_once(ROOT.'Controllers/Controller.php');

$params = explode('/',$_SERVER['REQUEST_URI']);

$action = isset($params[1]) ? $params[1] : 'index';

include_once('Controllers/Controller.php');
$controller = new Controller();
if(method_exists($controller,$action))
{
  if(isset($params[2]))
  {
    $id = $params[2];
    $controller->$action($id);
  }
  else
  {
    $controller->$action();
  }
}
else
{
  echo 'ERREUR 404';
}
//print_r($params);
