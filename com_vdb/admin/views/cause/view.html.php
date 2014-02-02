<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class vdbViewcause extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {


        $cause = & $this->get('Data');

        $operation = "";
        $cause->id == "" ? $operation = 'Add' : $operation = 'Edit';

        $text = $operation;
        JToolBarHelper::title(JText::_('Cause') . ': <small><small>[ ' . $text . ' ]</small></small>');
        JToolBarHelper::save();


        if($operation == 'Add')
        {
            JToolBarHelper::cancel('cancel');
        }
        if($operation == 'Edit')
        {
            // for existing items the button is renamed `close`
            JToolBarHelper::cancel('cancel','Close');
        }

        $this->assignRef('cause', $cause);
		$this->categorylist = $this->get('categorylist');

        parent::display($tpl);
    }

}

