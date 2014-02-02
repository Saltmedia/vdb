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
class vdbViewvdb extends JViewLegacy
{

    /**
     * Hellos view display method
     * @return void
     * */
    function display($tpl = null)
    {
        global $mainframe, $app, $option;

        JToolBarHelper::title(JText::_('Volunteer Opportunities'), 'generic.png');
        JToolBarHelper::publishList();
        JToolBarHelper::unpublishList();
        JToolBarHelper::deleteList();
        JToolBarHelper::editList();
        JToolBarHelper::addNew();

        $filter_state = $app->getUserStateFromRequest($option . 'filter_state', 'filter_state', '', 'word');
        $filter_order = $app->getUserStateFromRequest($option . 'filter_order', 'filter_order', 'a.ordering', 'cmd');
        $filter_order_Dir = $app->getUserStateFromRequest($option . 'filter_order_Dir', 'filter_order_Dir', '', 'word');

        $search = $app->getUserStateFromRequest($option . 'search', 'search', '', 'word');

        $javascript = 'onchange="document.adminForm.submit();"';

        $lists['state'] = JHTML::_('grid.state', $filter_state);
        // table ordering
        $lists['order_Dir'] = $filter_order_Dir;
        $lists['order'] = $filter_order;
        $lists['search'] = $search;

        $this->cause_category = $this->get('cause_category');
        // Get data from the model
        $items = & $this->get('Data');
        $total = & $this->get('Total');



        //$lists['state']	= JHTML::_('grid.state',  $filter_state );
        $this->assignRef('lists', $lists);
        $this->assignRef('items', $items);
        $this->pagination = $this->get('Pagination');

        parent::display($tpl);
    }

}

