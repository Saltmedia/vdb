<?php

/**
 * Hellos View for Hello World Component
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license		GNU/GPL
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

/**
 * Hellos View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class sponsorwallViewabout_sponsorwall extends JViewLegacy
{

    /**
     * Hellos view display method
     * @return void
     * */
    function display($tpl = null)
    {
        JToolBarHelper::title(JText::_('About Sponsor Wall'), 'generic.png');

        JSubMenuHelper::addEntry(JText::_('Configuration'), 'index.php?option=com_sponsorwall&controller=configuration');
        JSubMenuHelper::addEntry(JText::_('Categories'), 'index.php?option=com_sponsorwall&controller=categories');
        JSubMenuHelper::addEntry(JText::_('Wall'), 'index.php?option=com_sponsorwall');
        JSubMenuHelper::addEntry(JText::_('About Sponsor Wall'), 'index.php?option=com_sponsorwall&view=about_sponsorwall', true);

        parent::display($tpl);
    }

}

