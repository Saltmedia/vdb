<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControllercause_categories extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'cause_categories' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
