<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class vdbControllerskill extends JControllerLegacy
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
        JRequest::setVar('view', 'skills');
        JRequest::setVar('layout', 'default');
        parent::display();
    }

    function edit()
    {

        JRequest::setVar('view', 'skill');
        JRequest::setVar('layout', 'form');
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('skill');

        if($model->store())
        {
            $msg = JText::_('Skill Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Skill');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_vdb&controller=skills';
        $this->setRedirect($link, $msg);
    }

    /**
     * remove record(s)
     * @return void
     */
    function remove()
    {
        $model = $this->getModel('skill');
        if(!$model->delete())
        {
            $msg = JText::_('Error: One or More Skill Could not be Deleted');
        }
        else
        {
            $msg = JText::_('Skill(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_vdb&controller=skills', $msg);
    }

	function cancel()
    {
        $this->setRedirect('index.php?option=com_vdb&controller=skills');
    }

}

?>
