<?php

// No direct access

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

/**
 * Gallery XML Component Controller
 */
class sponsorwallControllerconfiguration extends JControllerLegacy
{

    function display()
    {
        JRequest::setVar('view', 'configuration');
        JRequest::setVar('layout', 'form');
        parent::display();
    }

    function save()
    {
        $model = $this->getModel('configuration');

        if($model->store())
        {
            $msg = JText::_('Configuration Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Greeting');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_sponsorwall&controller=configuration';
        $this->setRedirect($link, $msg);
    }

}
