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
class VDBModelskills extends JModelList
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

        $query = ' SELECT a.id, a.name, b.name as skill_category FROM #__vdb_skills as a LEFT JOIN #__vdb_skill_categories as b ON a.skillcatid=b.id '
                . $where
                . $orderby
        ;

        return $query;
    }

    function _buildContentWhere()
    {

        global $mainframe, $app, $option, $app;
        $db = & JFactory::getDBO();
		       $filter_catid = $app->getUserStateFromRequest($option . 'filter_category_id', 'filter_category_id', 0, 'int');

         $filter_order_cat = $app->getUserStateFromRequest($option . 'filter_order_cat', 'filter_order_cat', 'name', 'cmd');
        $filter_order_Dir_cat = $app->getUserStateFromRequest($option . 'filter_order_Dir_cat', 'filter_order_Dir_cat', '', 'word');
        $search_cat = $app->getUserStateFromRequest($option . 'search_cat', 'search_cat', '', 'string');
        $search_cat = JString::strtolower($search_cat);

        $where = array();
		
      if($filter_catid > 0)
        {
            $where[] = 'b.id = ' . (int) $filter_catid;
        }
 
        if($search_cat)
        {
            $where[] = 'LOWER(a.name) LIKE ' . $db->Quote('%' . $search_cat . '%', false);
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
	 
	     function getcategory()
    {
        $db = JFactory::getDbo();
        $query = 'SELECT * FROM #__vdb_skill_categories order by name';
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

}

