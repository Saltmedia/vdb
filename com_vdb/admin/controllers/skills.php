<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControllerskills extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'skills' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
