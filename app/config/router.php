
<?php
use Phalcon\Mvc\Router;
//$di->set('router', function() {
    $router = new Router();
// $di     = new \Phalcon\DI\FactoryDefault();
// $router->setDI($di);
 //$router = $di->getRouter();
//Remove trailing slashes automatically
// $router->removeExtraSlashes(true);
//main route
 $router->addGet('/user', array(
     'controller' => "User",
     'action'     => "index"
 ));


 $router->addPost('/user', array(
     'controller' => "User",
     'action'     => "insert"
 ));

$router->addPut('/user/update/{id:[0-9]+}', array(
     'controller' => "User",
     'action'     => "update"
 ));
	
 $router->addDelete('/user/delete/{id:[0-9]+}', array(
     'controller' => "User",
     'action'     => "delete"
 ));	

// $router->add('/:controller', array(
 //    'controller' => 1,
  //   'action'     => "insert"
// ));


      return $router;

//$router->handle();
 //return $router;
