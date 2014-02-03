<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class vdbControllerorganizations extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'organizations' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
