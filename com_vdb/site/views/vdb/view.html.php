<?php

/**
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link       http://docs.joomla.org/Category:Development
 * @license    GNU/GPL
 */
// no direct access

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

/**
 * HTML View class for the HelloWorld Component
 *
 * @package    HelloWorld
 */
class sponsorwallViewsponsorwall extends JViewLegacy
{

    function display($tpl = null)
    {
        //$model =& $this->getModel();
        //$greeting = $model->getGreeting();
        //$this->assignRef( 'greeting', $greeting );


        $wall = & $this->get('Data');
        $config_data = & $this->get('configdata');
        $categorylist = & $this->get('categorylist');
        $category = & $this->get('category');
        $category_name = $this->get('categoryname');
        $pagination = & $this->get('Pagination');



        $this->assignRef('wall', $wall);
        $this->assignRef('config_data', $config_data);
        $this->assignRef('categorylist', $categorylist);
        $this->assignRef('category', $category);
        $this->assignRef('category_name', $category_name);
        $this->assignRef('pagination', $pagination);

        parent::display($tpl);
    }

}

?>