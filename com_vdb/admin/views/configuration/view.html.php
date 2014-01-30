<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class sponsorwallViewconfiguration extends JViewLegacy
{

    /**
     * display method of Hello view
     * @return void
     * */
    function display($tpl = null)
    {

        //get the hello
        $configuration = & $this->get('Data');
        $walldata = & $this->get('walldata');
        $Categories = & $this->get('Categories');

        $isNew = ($configuration->id < 1);

        $text = $isNew ? JText::_('New') : JText::_('Edit');
        JToolBarHelper::title(JText::_('General Configuration') . ': <small><small>[ ' . $text . ' ]</small></small>');
        JToolBarHelper::save();

        JSubMenuHelper::addEntry(JText::_('Configuration'), 'index.php?option=com_sponsorwall&controller=configuration', true);
        JSubMenuHelper::addEntry(JText::_('Categories'), 'index.php?option=com_sponsorwall&controller=categories');
        JSubMenuHelper::addEntry(JText::_('Wall'), 'index.php?option=com_sponsorwall');
        JSubMenuHelper::addEntry(JText::_('About Sponsor Wall'), 'index.php?option=com_sponsorwall&view=about_sponsorwall');

        $this->assignRef('Categories', $Categories);
        $this->assignRef('configuration', $configuration);
        $this->assignRef('walldata', $walldata);

        parent::display($tpl);
    }

}

