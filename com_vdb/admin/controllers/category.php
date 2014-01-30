<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class SponsorwallControllercategory extends JControllerLegacy
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
        JRequest::setVar('view', 'categories');
        JRequest::setVar('layout', 'default');
        parent::display();
    }

    function edit()
    {

        JRequest::setVar('view', 'category');
        JRequest::setVar('layout', 'form');
        JRequest::setVar('hidemainmenu', 1);

        parent::display();
    }

    function save()
    {
        $model = $this->getModel('category');

        if($model->store())
        {
            $msg = JText::_('Category Saved!');
        }
        else
        {
            $msg = JText::_('Error Saving Greeting');
        }

        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_sponsorwall&controller=categories';
        $this->setRedirect($link, $msg);
    }

    /**
     * remove record(s)
     * @return void
     */
    function remove()
    {
        $model = $this->getModel('category');
        if(!$model->delete())
        {
            $msg = JText::_('Error: One or More Category Could not be Deleted');
        }
        else
        {
            $msg = JText::_('Category(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_sponsorwall&controller=categories', $msg);
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

        $model = $this->getModel('category');
        if(!$model->publish($cid, 1))
        {
            echo "<script> alert('" . $model->getError(true) . "'); window.history.go(-1); </script>\n";
        }

        $this->setRedirect('index.php?option=com_sponsorwall&view=categories');
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

        $model = $this->getModel('category');
        if(!$model->publish($cid, 0))
        {
            echo "<script> alert('" . $model->getError(true) . "'); window.history.go(-1); </script>\n";
        }

        $this->setRedirect('index.php?option=com_sponsorwall&view=categories');
    }

    function orderup()
    {
        $cid = JRequest::getVar('cid');
        $id = $cid[0];

        $model = $this->getModel('category');
        $model->move('up', $id);

        $this->setRedirect('index.php?option=com_sponsorwall&controller=categories', 'ordering changed');
    }

    function orderdown()
    {

        $cid = JRequest::getVar('cid');
        $id = $cid[0];

        $model = $this->getModel('category');
        $model->move('down', $id);

        $this->setRedirect('index.php?option=com_sponsorwall&controller=categories', 'ordering changed');
    }

    function saveorder()
    {
        // Check for request forgeries
        JRequest::checkToken() or jexit('Invalid Token');

        $cid = JRequest::getVar('cid', array(), 'post', 'array');
        $order = JRequest::getVar('order', array(), 'post', 'array');

        JArrayHelper::toInteger($cid);
        JArrayHelper::toInteger($order);

        $model = $this->getModel('category');
        $model->saveorder($cid, $order);

        $msg = 'New ordering saved';
        $this->setRedirect('index.php?option=com_sponsorwall&controller=categories', $msg);
    }

}

?>
