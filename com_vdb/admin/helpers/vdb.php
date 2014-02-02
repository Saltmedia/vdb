<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * HelloWorld component helper.
 */
abstract class vdbHelper
{
        /**
         * Configure the Linkbar.
         */
        public static function addSubmenu() 
        {
        JSubMenuHelper::addEntry(JText::_('Configuration'), 'index.php?option=com_vdb&controller=configuration');
		JSubMenuHelper::addEntry(JText::_('Causes'), 'index.php?option=com_vdb&controller=causes');
        JSubMenuHelper::addEntry(JText::_('Cause Categories'), 'index.php?option=com_vdb&controller=cause_categories');
        JSubMenuHelper::addEntry(JText::_('Opportunities'), 'index.php?option=com_vdb');
        JSubMenuHelper::addEntry(JText::_('About VDB'), 'index.php?option=com_vdb&view=about_vdb');

                // set some global property
 
        }
}