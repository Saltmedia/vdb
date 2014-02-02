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
class VDBModellocations extends JModelLegacy
{

    var $_data;
    var $_pagination = null;

    function _buildQuery()
    {
        //To put order NIRAJ
        $orderby = $this->_buildContentOrderBy();
        $where = $this->_buildContentWhere();
        //To put order NIRAJ

        $query = ' SELECT * FROM #__vdb_locations as c'
                . $where
                . $orderby
        ;

        return $query;
    }

    function _buildContentWhere()
    {

        global $mainframe, $app, $option, $app;
        $db = & JFactory::getDBO();
         $filter_order_cat = $app->getUserStateFromRequest($option . 'filter_order_cat', 'filter_order_cat', 'name', 'cmd');
        $filter_order_Dir_cat = $app->getUserStateFromRequest($option . 'filter_order_Dir_cat', 'filter_order_Dir_cat', '', 'word');
        $search_cat = $app->getUserStateFromRequest($option . 'search_cat', 'search_cat', '', 'string');
        $search_cat = JString::strtolower($search_cat);

        $where = array();

        /* if ($filter_catid > 0) {
          $where[] = 'a.catid = '.(int) $filter_catid;
          } */
        if($search_cat)
        {
            $where[] = 'LOWER(c.name) LIKE ' . $db->Quote('%' . $search_cat . '%', false);
        }


        $where = ( count($where) ? ' WHERE ' . implode(' AND ', $where) : '' );

        return $where;
    }

    function _buildContentOrderBy()
    {
        global $mainframe, $app, $option, $app;

        $filter_order_cat = $app->getUserStateFromRequest($option . 'filter_order_cat', 'filter_order_cat', 'name', 'cmd');
        $filter_order_Dir_cat = $app->getUserStateFromRequest($option . 'filter_order_Dir_cat', 'filter_order_Dir_cat', '', 'word');

        $orderby = ' ORDER BY name ' . $filter_order_Dir_cat;



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
            $this->_data = $this->_getList($query);
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

}

