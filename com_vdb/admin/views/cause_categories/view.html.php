<?php

/**
 * Hellos View for Hello World Component
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license		GNU/GPL
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

/**
 * Hellos View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class vdbViewcause_categories extends JViewLegacy
{

    /**
     * Hellos view display method
     * @return void
     * */
    function display($tpl = null)
    {
        global $mainframe, $app, $option;
        JToolBarHelper::title(JText::_('Cause Category Manager'), 'generic.png');
        JToolBarHelper::deleteList();
        JToolBarHelper::editList();
        JToolBarHelper::addNew();

        //To put order NIRAJ
        $filter_state_cat = $app->getUserStateFromRequest($option . 'filter_state_cat', 'filter_state_cat', '', 'word');
        $filter_order_cat = $app->getUserStateFromRequest($option . 'filter_order_cat', 'filter_order_cat', 'id', 'cmd');
        $filter_order_Dir_cat = $app->getUserStateFromRequest($option . 'filter_order_Dir_cat', 'filter_order_Dir_cat', '', 'word');
        $search_cat = $app->getUserStateFromRequest($option . 'search_cat', 'search_cat', '', 'word');

        $javascript = 'onchange="document.adminForm.submit();"';

        $lists_cat['state_cat'] = JHTML::_('grid.state', $filter_state_cat);
        $lists_cat['order_Dir_cat'] = $filter_order_Dir_cat;
        $lists_cat['order_cat'] = $filter_order_cat;
        $lists_cat['search_cat'] = $search_cat;

        // Get data from the model
        $items = & $this->get('Data');
        $this->pagination = $this->get('Pagination');
        $total = & $this->get('Total');


        //To ordering NIRAJ
        $this->assignRef('lists_cat', $lists_cat);
        $this->assignRef('items', $items);

        parent::display($tpl);
    }

}

