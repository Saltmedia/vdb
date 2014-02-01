<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class sponsorwallViewsponsorwalloperation extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {

        //get the hello
        $wall = & $this->get('Data');
        $categories = & $this->get('Categories');


        $operation = "";
        $wall->id == "" ? $operation = 'Add' : $operation = 'Edit';

        $text = $operation;
        JToolBarHelper::title(JText::_('Category') . ': <small><small>[ ' . $text . ' ]</small></small>');
        JToolBarHelper::save();


        if($operation == 'Add')
        {
            JToolBarHelper::cancel();
        }
        if($operation == 'Edit')
        {
            // for existing items the button is renamed `close`
            JToolBarHelper::cancel('cancel', 'Close');
        }

        $this->assignRef('wall', $wall);
        $this->assignRef('categories', $categories);
        parent::display($tpl);
    }

}

