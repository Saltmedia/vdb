<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class VDBController extends JControllerLegacy
{

    /**
     * Method to display the view
     *
     * @access	public
     */
    function display()
    {
        parent::display();
		vdbHelper::addSubmenu();
    }

    function __construct()
    {
        parent::__construct();

        // Register Extra tasks
        $this->registerTask('add', 'edit');
    }

    function edit()
    {


        JRequest::setVar('view', 'vdboperation');
        JRequest::setVar('layout', 'form');
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('vdboperation');

        if($model->store())
        {
            $msg = JText::_('Opportunity Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Opportunity');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_vdb';
        $this->setRedirect($link, $msg);
    }

    /**
     * remove record(s)
     * @return void
     */
    function remove()
    {
        $model = $this->getModel('vdboperation');
        if(!$model->delete())
        {
            $msg = JText::_('Error: One or More Opportunities Could not be Deleted');
        }
        else
        {
            $msg = JText::_('Opportunity(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_vdb', $msg);
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

        $model = $this->getModel('vdboperation');
        if(!$model->publish($cid, 1))
        {
            echo "<script> alert('" . $model->getError(true) . "'); window.history.go(-1); </script>\n";
        }

        $this->setRedirect('index.php?option=com_vdb');
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

        $model = $this->getModel('vdboperation');
        if(!$model->publish($cid, 0))
        {
            echo "<script> alert('" . $model->getError(true) . "'); window.history.go(-1); </script>\n";
        }

        $this->setRedirect('index.php?option=com_vdb');
    }



}

?>
