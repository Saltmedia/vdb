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
class VDBModelorganizations extends JModelList
{

    var $_data;
    var $_pagination = null;
    var $_total = null;
	
	  function __construct()
  {
        parent::__construct();
 
        $mainframe = JFactory::getApplication();
 
        // Get pagination request variables
        $limit = $mainframe->getUserStateFromRequest('global.list.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
        $limitstart = JRequest::getVar('limitstart', 0, '', 'int');
 
        // In case limit has been changed, adjust it
        $limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
 
        $this->setState('limit', $limit);
        $this->setState('limitstart', $limitstart);
  }
	
    function _buildQuery()
    {
        //To put order NIRAJ
        $orderby = $this->_buildContentOrderBy();
        $where = $this->_buildContentWhere();
        //To put order NIRAJ

        $query = ' SELECT a.id, a.name, a.skillids, c.name as location, b.name as cause, a.published FROM #__vdb_organizations as a LEFT JOIN #__vdb_causes as b ON a.causeid=b.id LEFT JOIN #__vdb_locations as c ON a.locationid = c.id '
                . $where
                . $orderby
        ;

        return $query;
    }

    function _buildContentWhere()
    {

        global $mainframe, $app, $option, $app;
        $db = & JFactory::getDBO();
		       $filter_causeid = $app->getUserStateFromRequest($option . 'filter_cause_id', 'filter_cause_id', 0, 'int');
			   $filter_locationid = $app->getUserStateFromRequest($option . 'filter_location_id', 'filter_location_id', 0, 'int');
        $filter_state = $app->getUserStateFromRequest($option . 'filter_state', 'filter_state', '', 'word');
        $filter_order_cat = $app->getUserStateFromRequest($option . 'filter_order_cat', 'filter_order_cat', 'name', 'cmd');
        $filter_order_Dir_cat = $app->getUserStateFromRequest($option . 'filter_order_Dir_cat', 'filter_order_Dir_cat', '', 'word');
        $search_cat = $app->getUserStateFromRequest($option . 'search_cat', 'search_cat', '', 'string');
        $search_cat = JString::strtolower($search_cat);

        $where = array();
		
      if($filter_causeid > 0)
        {
            $where[] = 'b.id = ' . (int) $filter_causeid;
        }
       if($filter_locationid > 0)
        {
            $where[] = 'c.id = ' . (int) $filter_locationid;
        }
        if($search_cat)
        {
            $where[] = 'LOWER(a.name) LIKE ' . $db->Quote('%' . $search_cat . '%', false);
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
        global $mainframe, $app, $option, $app;

        $filter_order_cat = $app->getUserStateFromRequest($option . 'filter_order_cat', 'filter_order_cat', 'name', 'cmd');
        $filter_order_Dir_cat = $app->getUserStateFromRequest($option . 'filter_order_Dir_cat', 'filter_order_Dir_cat', '', 'word');

        $orderby = ' ORDER BY a.name ' . $filter_order_Dir_cat;



        return $orderby;
    }

    /**
     * Retrieves the hello data
     * @return array Array of objects containing the data from the database
     */
	 
	     function getlocation()
    {
        $db = JFactory::getDbo();
        $query = 'SELECT * FROM #__vdb_locations order by id';
        $max = $this->_getList($query);

        return $max;
    }
	 
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

	    /**
     * Retrieves the hello data
     * @return array Array of objects containing the data from the database
     */
	 
	     function getcause()
    {
        $db = JFactory::getDbo();
        $query = 'SELECT * FROM #__vdb_causes order by name';
        $max = $this->_getList($query);

        return $max;
    }
	
}

