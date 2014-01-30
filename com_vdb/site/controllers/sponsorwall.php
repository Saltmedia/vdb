<?php

// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');


class SponsorwallControllersponsorwall extends JControllerLegacy
{
	/**
	 * Method to display the view
	 *
	 * @access	public
	 */
	function display()
	{
	   
		
		parent::display();
	}
	
	function flipwall()
	{
	
	    JRequest::setVar( 'view', 'flipwall' );
		JRequest::setVar( 'layout', 'default'  );
		JRequest::setVar('hidemainmenu', 1);
		
		parent::display();
	}
	
	
	
	
}	
	?>
