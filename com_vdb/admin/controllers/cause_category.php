<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class vdbControllercause_category extends JControllerLegacy
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
        JRequest::setVar('view', 'cause_categories');
        JRequest::setVar('layout', 'default');
        parent::display();
    }

    function edit()
    {

        JRequest::setVar('view', 'cause_category');
        JRequest::setVar('layout', 'form');
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('cause_category');

        if($model->store())
        {
            $msg = JText::_('Cause Category Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Cause Category');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_vdb&controller=cause_categories';
        $this->setRedirect($link, $msg);
    }

    /**
     * remove record(s)
     * @return void
     */
    function remove()
    {
        $model = $this->getModel('cause_category');
        if(!$model->delete())
        {
            $msg = JText::_('Error: One or More Category Could not be Deleted');
        }
        else
        {
            $msg = JText::_('Category(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_vdb&controller=cause_categories', $msg);
    }



}

?>
