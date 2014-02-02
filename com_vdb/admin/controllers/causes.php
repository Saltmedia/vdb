<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControllercauses extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'causes' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
