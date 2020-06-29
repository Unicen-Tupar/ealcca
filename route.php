<?php

require_once 'config/ConfigApp.php';
require_once 'index.php';
require_once 'staff.php';
require_once 'extensiones.php';
require_once 'makeup.php';
require_once 'cursos.php';
require_once 'contacto.php';
require_once 'admin/courses.php';
// require_once 'admin/categories.php';


function parceURL($url){
  $urlExploded = explode("/",$url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

$urlData = parceURL($_GET[ConfigApp::$ACTION]); //parsea la url para identificar uno del otro
$actionName = $urlData[ConfigApp::$ACTION]; //nombre de la accion a ejecutar
        
if (array_key_exists($actionName,ConfigApp::$ACTIONS)) {
  $params = $urlData[ConfigApp::$PARAMS];
  $methodName = ConfigApp::$ACTIONS[$actionName];

  if (isset($params) && $params != null) {
    echo $methodName($params);
  }else{
    echo $methodName();
  }
}else{
  echo home();  
}

?>