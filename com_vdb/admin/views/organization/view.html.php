<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class vdbVieworganization extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {


        $organization = & $this->get('Data');

        $operation = "";
        $organization->id == "" ? $operation = 'Add' : $operation = 'Edit';

        $text = $operation;
        JToolBarHelper::title(JText::_('Organization') . ': <small><small>[ ' . $text . ' ]</small></small>');
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

        $this->assignRef('organization', $organization);
		$this->cause = $this->get('cause');
		$this->location = $this->get('location');

        parent::display($tpl);
    }

}

