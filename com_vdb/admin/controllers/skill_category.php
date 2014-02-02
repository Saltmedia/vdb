<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class vdbControllerskill_category extends JControllerLegacy
{

    /**
     * Method to display the view
     *
     * @access	public
     */
    function display()
    {
        parent::display();
    }

    function __construct()
    {
        parent::__construct();

        // Register Extra tasks
        $this->registerTask('add', 'edit');
    }

    function search()
    {
        JRequest::setVar('view', 'skill_categories');
        JRequest::setVar('layout', 'default');
        parent::display();
    }

    function edit()
    {

        JRequest::setVar('view', 'skill_category');
        JRequest::setVar('layout', 'form');
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('skill_category');

        if($model->store())
        {
            $msg = JText::_('Skill Category Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Skill Category');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_vdb&controller=skill_categories';
        $this->setRedirect($link, $msg);
    }

    /**
     * remove record(s)
     * @return void
     */
    function remove()
    {
        $model = $this->getModel('skill_category');
        if(!$model->delete())
        {
            $msg = JText::_('Error: One or More Category Could not be Deleted');
        }
        else
        {
            $msg = JText::_('Category(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_vdb&controller=skill_categories', $msg);
    }

	function cancel()
    {
        $this->setRedirect('index.php?option=com_vdb&controller=skill_categories');
    }

}

?>
