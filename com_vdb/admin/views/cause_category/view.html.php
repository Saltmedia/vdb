<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class vdbViewcause_category extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {


        $cause_category = & $this->get('Data');

        $operation = "";
        $cause_category->id == "" ? $operation = 'Add' : $operation = 'Edit';

        $text = $operation;
        JToolBarHelper::title(JText::_('Cause Category') . ': <small><small>[ ' . $text . ' ]</small></small>');
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

        $this->assignRef('cause_category', $cause_category);

        parent::display($tpl);
    }

}

