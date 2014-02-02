<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControllerskill_categories extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'skill_categories' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
