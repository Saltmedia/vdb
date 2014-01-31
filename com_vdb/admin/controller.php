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
            $msg = JText::_('VDB Object Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving VDB Object');
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
            $msg = JText::_('Error: One or More VDB Object Could not be Deleted');
        }
        else
        {
            $msg = JText::_('VDB Object(s) Deleted');
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

    function orderup()
    {
        $filter_category_id = JRequest::getVar('filter_category_id');

        if($filter_category_id == "")
        {
            $msg = 'Select Category To Change Ordering';
        }
        else
        {
            $catid = $filter_category_id;
            $cid = JRequest::getVar('cid');
            $id = $cid[0];
            $model = $this->getModel('vdboperation');
            $model->move('up', $id, $catid);
            $msg = 'Ordering Changed';
        }

        $this->setRedirect('index.php?option=com_sponsorwall', $msg);
    }

    function orderdown()
    {
        $filter_category_id = JRequest::getVar('filter_category_id');

        if($filter_category_id == "")
        {
            $msg = 'Select Category To Change Ordering';
        }
        else
        {
            $catid = $filter_category_id;
            $cid = JRequest::getVar('cid');
            $id = $cid[0];
            $model = $this->getModel('vdboperation');
            $model->move('down', $id, $catid);
            $msg = 'Ordering Changed';
        }

        $this->setRedirect('index.php?option=com_vdb', $msg);
    }

    function saveorder()
    {
        // Check for request forgeries
        // JRequest::checkToken() or jexit('Invalid Token');
        $filter_category_id = JRequest::getVar('filter_category_id');

        if($filter_category_id == "")
        {
            $msg = 'Select Category To Change Ordering';
        }
        else
        {
            $cid = JRequest::getVar('cid', array(), 'post', 'array');

            $order = JRequest::getVar('order', array(), 'post', 'array');

            JArrayHelper::toInteger($cid);
            JArrayHelper::toInteger($order);

            $model = $this->getModel('vdboperation');
            $model->saveorder($cid, $order);

            $msg = 'New ordering saved';
        }

        $this->setRedirect('index.php?option=com_vdb', $msg);
    }

}

?>
