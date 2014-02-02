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
        public static function addSubmenu($active) 
        {
        JSubMenuHelper::addEntry(JText::_('Configuration'), 'index.php?option=com_vdb&controller=configuration',$active=='Configuration' ? true : false);
		JSubMenuHelper::addEntry(JText::_('Opportunities'), 'index.php?option=com_vdb',$active=='Opportunities' ? true : false);
		JSubMenuHelper::addEntry(JText::_('Causes'), 'index.php?option=com_vdb&controller=causes',$active=='Causes' ? true : false);
        JSubMenuHelper::addEntry(JText::_('Cause Categories'), 'index.php?option=com_vdb&controller=cause_categories',$active=='Cause Categories' ? true : false);
        JSubMenuHelper::addEntry(JText::_('Skills'), 'index.php?option=com_vdb&controller=skills',$active=='Skills' ? true : false);
        JSubMenuHelper::addEntry(JText::_('Skill Categories'), 'index.php?option=com_vdb&controller=skill_categories',$active=='Skill Categories' ? true : false);
		JSubMenuHelper::addEntry(JText::_('Locations'), 'index.php?option=com_vdb&controller=locations',$active=='Locations' ? true : false);
        JSubMenuHelper::addEntry(JText::_('About VDB'), 'index.php?option=com_vdb&view=about_vdb',$active=='About' ? true : false);

                // set some global property
 
        }
}