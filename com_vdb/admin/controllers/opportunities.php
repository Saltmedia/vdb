<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControlleropportunities extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'opportunities' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
