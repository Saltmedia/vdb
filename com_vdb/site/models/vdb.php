<?php

/**
 * Hello Model for Hello World Component
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link       http://docs.joomla.org/Category:Development
 * @license    GNU/GPL
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

/**
 * Hello Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class sponsorwallModelsponsorwall extends JModelLegacy
{
    /**
     * Gets the greeting
     *
     * @return string The greeting to be displayed to the user
     */

    /**
     * Items total
     * @var integer
     */
    var $_total = null;

    /**
     * Pagination object
     * @var object
     */
    var $_pagination = null;

    function __construct()
    {
        parent::__construct();

        global $app, $option, $mainframe;

        // Get pagination request variables
        $limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'int');

        $limit = 3;

        $limit_wall_per_page = $this->getconfigdata();
        $limit = $limit_wall_per_page->wall_per_page;


        $limitstart = JRequest::getVar('limitstart', 0, '', 'int');

        // In case limit has been changed, adjust it
        $limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);

        $this->setState('limit', $limit);
        $this->setState('limitstart', $limitstart);
    }

    function _buildQuery()
    {
        $db = & JFactory::getDBO();
        $cid = JRequest::getVar('c', 0);
        $cid = explode("-", $cid);
        if($cid[0] > 0)
        {
            $query = 'SELECT * FROM #__sponsorwall where catid=' . $cid[0] . ' and published=1 ORDER BY ordering ASC';
        } else
        {

            $query_cat = 'SELECT default_category FROM #__sponsorwall_config';
            $db->setQuery($query_cat);
            $default_category = $db->loadResult();

            $query = 'SELECT * FROM #__sponsorwall'
                    . ' WHERE catid = ' . (int) $default_category
                    . ' and published=1 ORDER BY ordering ASC';
        }

        return $query;
    }

    function getdata()
    {
        $db = & JFactory::getDBO();



        $query = $this->_buildQuery();
        $greeting = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
        return $greeting;
    }

    function getTotal()
    {
        // Load the content if it doesn't already exist
        if(empty($this->_total))
        {
            $query = $this->_buildQuery();
            $this->_total = $this->_getListCount($query);
        }
        return $this->_total;
    }

    function getPagination()
    {
        // Load the content if it doesn't already exist
        if(empty($this->_pagination))
        {
            jimport('joomla.html.pagination');
            $this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit'));
        }
        return $this->_pagination;
    }

    function getcategory()
    {
        $db = & JFactory::getDBO();
        $cid = JRequest::getVar('c', 0);
        $catid = explode("-", $cid);

        $query = 'SELECT * FROM #__sponsorwall_category where id=' . $catid[0] . ' ORDER BY ordering';
        $db->setQuery($query);
        $config_data = $this->_db->loadObject();
        return $config_data;
    }

    function getcategoryname()
    {
        $db = & JFactory::getDBO();

        $cid = JRequest::getVar('c', 0);
        $caid = explode("-", $cid);


        if($cid == "")
        {
            $query_cat = 'SELECT default_category FROM #__sponsorwall_config';
            $db->setQuery($query_cat);
            $cid = $db->loadResult();
            $query = 'SELECT * FROM #__sponsorwall_category WHERE id=' . $cid;
        } else
        {

            $query = 'SELECT * FROM #__sponsorwall_category WHERE id=' . $caid[0];
        }
        $db->setQuery($query);
        $cat_data = $this->_db->loadObject();

        return $cat_data;
    }

    function getconfigdata()
    {
        $db = & JFactory::getDBO();

        $query = 'SELECT * FROM #__sponsorwall_config where id=1';
        $db->setQuery($query);
        $config_data = $this->_db->loadObject();

        $limit = $config_data->wall_per_page;

        return $config_data;
    }

    function click()
    {
        $db = & JFactory::getDBO();
        $date = & JFactory::getDate();
        $query = 'UPDATE #__sponsorwall set click = ( click + 1 ) where id =' . $_GET['wallid'];
        $db->setQuery($query);
        $db->query();
    }

    function getUrl($id = 0)
    {
        global $mainframe;

        $db = &$this->getDBO();

        // redirect to banner url
        $query = 'SELECT url FROM #__sponsorwall' .
                ' WHERE id = ' . (int) $id;

        $db->setQuery($query);
        if(!$db->query())
        {
            JError::raiseError(500, $db->stderr());
        }
        $url = $db->loadResult();

        // check for links
        if(!preg_match('#http[s]?://|index[2]?\.php#', $url))
        {
            $url = "http://$url";
        }
        return $url;
    }

    function getcategorylist()
    {
        $db = & JFactory::getDBO();

        $query = 'SELECT * FROM #__sponsorwall_category where published=1 ORDER BY ordering';
        $db->setQuery($query);
        $greeting = $this->_getList($query);
        return $greeting;
    }

}

