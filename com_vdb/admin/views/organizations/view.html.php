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
class vdbVieworganizations extends JViewLegacy
{

    /**
     * Hellos view display method
     * @return void
     * */
    function display($tpl = null)
    {
        global $mainframe, $app, $option;
		vdbHelper::addSubMenu('Organizations');
        JToolBarHelper::title(JText::_('Member Organizations'), 'generic.png');
        JToolBarHelper::publishList();
        JToolBarHelper::unpublishList();
        JToolBarHelper::deleteList();
        JToolBarHelper::editList();
        JToolBarHelper::addNew();

        $filter_state = $app->getUserStateFromRequest($option . 'filter_state', 'filter_state', '', 'word');
        $filter_order = $app->getUserStateFromRequest($option . 'filter_order', 'filter_order', 'name', 'cmd');
        $filter_order_Dir = $app->getUserStateFromRequest($option . 'filter_order_Dir', 'filter_order_Dir', '', 'word');
        $search_cat = $app->getUserStateFromRequest($option . 'search_cat', 'search_cat', '', 'word');

        $javascript = 'onchange="document.adminForm.submit();"';

        $lists['state'] = JHTML::_('grid.state', $filter_state);
        // table ordering
        $lists['order_Dir'] = $filter_order_Dir;
        $lists['order'] = $filter_order;
        $lists['search_cat'] = $search_cat;

        $this->cause = $this->get('cause');
		$this->location = $this->get('location');
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

