<?php
/**
 * My new Zend Framework project
 * 
 * @author  
 * @version 
 */
set_include_path('.' . PATH_SEPARATOR . '../library' . PATH_SEPARATOR . '../application/default/models/' . PATH_SEPARATOR . get_include_path());

require_once 'Initializer.php';
 
// Prepare the front controller. 
$frontController = Zend_Controller_Front::getInstance(); 

// Change to 'production' parameter under production environemtn
$frontController->registerPlugin(new Initializer('development'));    

// Dispatch the request using the front controller. 
$frontController->dispatch(); 
?>

