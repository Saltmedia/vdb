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

        JRequest::setVar('view','vdb');
        JRequest::setVar('layout','default');
        JRequest::setVar('hidemainmenu',1);

        parent::display();
    }

    function flipwall()
    {

        JRequest::setVar('view','category');
        JRequest::setVar('layout','default');

        parent::display();
    }

    function click()
    {
        $wallid = JRequest::getInt('wallid',0);
        $url = JRequest::getInt('url',0);
        if($wallid)
        {
            $model = &$this->getModel('vdb');
            $model->click($wallid);
            $this->setRedirect($model->getUrl($wallid));
        }
    }

}

?>
