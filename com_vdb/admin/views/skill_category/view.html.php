<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class vdbViewskill_category extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {


        $skill_category = & $this->get('Data');

        $operation = "";
        $skill_category->id == "" ? $operation = 'Add' : $operation = 'Edit';

        $text = $operation;
        JToolBarHelper::title(JText::_('Skill Category') . ': <small><small>[ ' . $text . ' ]</small></small>');
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

        $this->assignRef('skill_category', $skill_category);

        parent::display($tpl);
    }

}

