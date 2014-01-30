<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');

class SponsorwallControllerCategories extends JControllerLegacy
{

	  function display()
    {
		JRequest::setVar( 'view', 'categories' );
		JRequest::setVar( 'layout', 'default' );
        parent::display();
    }
 
 
}
