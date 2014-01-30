<?php

/**
 * @package     Joomla.Tutorials
 * @subpackage  Components
 * components/com_hello/hello.php
 * @link        http://docs.joomla.org/Category:Development
 * @license     GNU/GPL
 */
// no direct access

defined('_JEXEC') or die('Restricted access');
if(!defined('DS'))
{
    define('DS',DIRECTORY_SEPARATOR);
}

// Require the base controller

require_once( JPATH_COMPONENT . DS . 'controller.php' );

// Require specific controller if requested

$path = JPATH_COMPONENT . DS . 'controllers' . DS . 'vdb.php';
if(file_exists($path))
{
    require_once $path;
}



// Create the controller
$controller = '';
$classname = 'VDBController' . $controller;
$controller = new $classname( );

// Perform the Request task
$controller->execute(JRequest::getVar('task'));

// Redirect if set by the controller
$controller->redirect();
?>