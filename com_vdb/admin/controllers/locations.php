<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControllerlocations extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'locations' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
