<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class vdbControlleropportunity extends JControllerLegacy
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
        JRequest::setVar('view', 'opportunities');
        JRequest::setVar('layout', 'default');
        parent::display();
    }

    function edit()
    {

        JRequest::setVar('view', 'opportunity');
        JRequest::setVar('layout', 'form');
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('opportunity');

        if($model->store())
        {
            $msg = JText::_('Organization Opportunity Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Organization Opportunity');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_vdb&controller=opportunities';
        $this->setRedirect($link, $msg);
    }

    /**
     * remove record(s)
     * @return void
     */
    function remove()
    {
        $model = $this->getModel('opportunity');
        if(!$model->delete())
        {
            $msg = JText::_('Error: One or More Organization Could not be Deleted');
        }
        else
        {
            $msg = JText::_('Organization(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_vdb&controller=opportunities', $msg);
    }

	function cancel()
    {
        $this->setRedirect('index.php?option=com_vdb&controller=opportunities');
    }

	    /**
     * unpublish one record from link
     * @return void
     */
    function publish()
    {
        // Check for request forgeries
        JRequest::checkToken() or jexit('Invalid Token');

        $cid = JRequest::getVar('cid', array(), 'post', 'array');
        JArrayHelper::toInteger($cid);

        if(count($cid) < 1)
        {
            JError::raiseError(500, JText::_('Select an item to publish'));
        }

        $model = $this->getModel('opportunity');
        if(!$model->publish($cid, 1))
        {
            echo "<script> alert('" . $model->getError(true) . "'); window.history.go(-1); </script>\n";
        }

        $this->setRedirect('index.php?option=com_vdb&controller=opportunities');
    }

    function unpublish()
    {
        // Check for request forgeries
        JRequest::checkToken() or jexit('Invalid Token');

        $cid = JRequest::getVar('cid', array(), 'post', 'array');
        JArrayHelper::toInteger($cid);

        if(count($cid) < 1)
        {
            JError::raiseError(500, JText::_('Select an item to unpublish'));
        }

        $model = $this->getModel('opportunity');
        if(!$model->publish($cid, 0))
        {
            echo "<script> alert('" . $model->getError(true) . "'); window.history.go(-1); </script>\n";
        }

        $this->setRedirect('index.php?option=com_vdb&controller=opportunities');
    }
	
	
}

?>
