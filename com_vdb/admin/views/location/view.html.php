<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class vdbViewlocation extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {


        $location = & $this->get('Data');

        $operation = "";
        $location->id == "" ? $operation = 'Add' : $operation = 'Edit';

        $text = $operation;
        JToolBarHelper::title(JText::_('Location') . ': <small><small>[ ' . $text . ' ]</small></small>');
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

        $this->assignRef('location', $location);

        parent::display($tpl);
    }

}

