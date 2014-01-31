<?php

/**
 * Hellos Model for Hello World Component
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license		GNU/GPL
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

/**
 * Hello Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class sponsorwallModelsponsorwall extends JModelLegacy
{

    var $_data = null;
    var $_total = null;
    var $_pagination = null;

    function __construct()
    {
        parent::__construct();

        global $mainframe, $app, $option;
    }

    /**
     * Returns the query
     * @return string The query to be used to retrieve the rows from the database
     */
    function _buildQuery()
    {
        $orderby = $this->_buildContentOrderBy();
        $where = $this->_buildContentWhere();

        $query = ' SELECT * '
                . ' FROM #__sponsorwall as a '
                . $where
                . $orderby
        ;

        return $query;
    }

    function _buildContentWhere()
    {

        global $mainframe, $app, $option, $mainframe;
        $db = & JFactory::getDBO();
        $filter_state = $app->getUserStateFromRequest($option . 'filter_state', 'filter_state', '', 'word');
        $filter_catid = $app->getUserStateFromRequest($option . 'filter_category_id', 'filter_category_id', 0, 'int');
        $filter_order = $app->getUserStateFromRequest($option . 'filter_order', 'filter_order', 'a.ordering', 'cmd');
        $filter_order_Dir = $app->getUserStateFromRequest($option . 'filter_order_Dir', 'filter_order_Dir', '', 'word');
        $search = $app->getUserStateFromRequest($option . 'search', 'search', '', 'string');
        $search = JString::strtolower($search);

        $where = array();

        if($filter_catid > 0)
        {
            $where[] = 'a.catid = ' . (int) $filter_catid;
        }
        if($search)
        {
            $where[] = 'LOWER(a.title) LIKE ' . $db->Quote('%' . $search . '%', false);
        }
        if($filter_state)
        {
            if($filter_state == 'P')
            {
                $where[] = 'a.published = 1';
            }
            else if($filter_state == 'U')
            {
                $where[] = 'a.published = 0';
            }
        }


        $where = ( count($where) ? ' WHERE ' . implode(' AND ', $where) : '' );

        return $where;
    }

    function _buildContentOrderBy()
    {
        global $mainframe, $app, $option, $mainframe;

        $filter_order = $app->getUserStateFromRequest($option . 'filter_order', 'filter_order', 'a.ordering', 'cmd');
        $filter_order_Dir = $app->getUserStateFromRequest($option . 'filter_order_Dir', 'filter_order_Dir', '', 'word');

        if($filter_order == 'a.ordering')
        {
            $orderby = ' ORDER BY catid, a.ordering ' . $filter_order_Dir;
        }
        else
        {
            $orderby = ' ORDER BY ' . $filter_order . ' ' . $filter_order_Dir . ' , catid, a.ordering ';
        }


        return $orderby;
    }

    /**
     * Retrieves the hello data
     * @return array Array of objects containing the data from the database
     */
    function getData()
    {
        // Lets load the data if it doesn't already exist
        if(empty($this->_data))
        {
            $query = $this->_buildQuery();
            $this->_data = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
        }

        return $this->_data;
    }

    function getTotal()
    {
        // Lets load the content if it doesn't already exist
        if(empty($this->_total))
        {
            $query = $this->_buildQuery();
            $this->_total = $this->_getListCount($query);
        }

        return $this->_total;
    }

    /**
     * Method to get a pagination object for the weblinks
     *
     * @access public
     * @return integer
     */
    function getPagination()
    {
        // Lets load the content if it doesn't already exist
        if(empty($this->_pagination))
        {
            jimport('joomla.html.pagination');
            $this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit'));
        }

        return $this->_pagination;
    }

    function getcategory()
    {
        $db = JFactory::getDbo();
        $query = 'SELECT * FROM #__sponsorwall_category';
        $max = $this->_getList($query);

        return $max;
    }

}

