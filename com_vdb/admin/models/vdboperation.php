<?php

/**
 * Hello Model for Hello World Component
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
 * Hello Hello Model
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class VDBModelVDBoperation extends JModelLegacy
{

    /**
     * Constructor that retrieves the ID from the request
     *
     * @access	public
     * @return	void
     */
    function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid',0,'','array');
        $this->setId((int) $array[0]);
    }

    /**
     * Method to set the hello identifier
     *
     * @access	public
     * @param	int Hello identifier
     * @return	void
     */
    function setId($id)
    {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    /**
     * Method to get a hello
     * @return object with data
     */
    function &getData()
    {
        // Load the data
        if(empty($this->_data))
        {
            $query = ' SELECT * FROM #__sponsorwall ' .
                    '  WHERE id = ' . $this->_id;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if(!$this->_data)
        {
            $this->_data = new stdClass();
            $this->_data->id = 0;
            $this->_data->title = null;
            $this->_data->url = null;
            $this->_data->desc = null;
            $this->_data->image = null;
            $this->_data->link = null;
            $this->_data->published = null;
        }
        return $this->_data;
    }

    function &getCategories()
    {
        if(empty($this->_categories))
        {
            $query = 'SELECT * FROM #__sponsorwall_category';
            $this->_categories = $this->_getList($query);
        }
        return $this->_categories;
    }

    function store()
    {
        $data = JRequest::get('post');
        $catid = $data['catid'];
        $id = $data['id'];
        if($id == 0)
        {
            $query = "SELECT MAX(ordering)+1 AS max_order FROM #__sponsorwall WHERE catid = $catid";
        }
        else
        {
            $query = "SELECT ordering AS max_order FROM #__sponsorwall WHERE id=$id";
        }

        $row = & $this->getTable();

        $this->_db->setQuery($query);
        $this->_data = $this->_db->loadObject();
        $max_order = $this->_data->max_order;
        $data['ordering'] = $max_order;

        $img_name = time() . '_' . $_FILES['image']['name'];
        $cids = JRequest::getVar('cid',array(0),'post','array');
        $id = JRequest::getVar('id','post');

        if($_FILES['image']['tmp_name'] != "")
        {

            $newimage = JPATH_COMPONENT_SITE . DS . 'images' . DS . $img_name;
            $result = @move_uploaded_file($_FILES['image']['tmp_name'],$newimage);
            $data['image'] = $img_name;
        }
        // Bind the form fields to the hello table
        if(!$row->bind($data))
        {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Make sure the hello record is valid
        if(!$row->check())
        {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // Store the web link table to the database
        if(!$row->store())
        {
            $this->setError($row->getErrorMsg());
            return false;
        }

        return true;
    }

    /**
     * Method to delete record(s)
     *
     * @access	public
     * @return	boolean	True on success
     */
    function delete()
    {
        $cids = JRequest::getVar('cid',array(0),'post','array');

        $row = & $this->getTable();

        if(count($cids))
        {
            foreach($cids as $cid)
            {
                if(!$row->delete($cid))
                {
                    $this->setError($row->getErrorMsg());
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * unpublish one record from link
     * @return void
     */
    function publish($cid = array(),$publish = 1)
    {
        $user = & JFactory::getUser();

        if(count($cid))
        {
            JArrayHelper::toInteger($cid);
            $cids = implode(',',$cid);

            echo $query = 'UPDATE #__sponsorwall'
            . ' SET published = ' . (int) $publish
            . ' WHERE id IN ( ' . $cids . ' )';



            $this->_db->setQuery($query);
            if(!$this->_db->query())
            {
                $this->setError($this->_db->getErrorMsg());
                return false;
            }
        }

        return true;
    }

    /**
     * Method to move a weblink
     *
     * @access	public
     * @return	boolean	True on success
     * @since	1.5
     */
    function move($direction,$id,$catid)
    {

        $query1 = "SELECT ordering FROM #__sponsorwall WHERE id = $id AND catid= $catid ";
        $this->_db->setQuery($query1);
        $object = $this->_db->loadObject();
        $current_order = $object->ordering;
        if($direction == 'up')
        {
            $query2 = "SELECT MAX(ordering)AS ordering FROM #__sponsorwall WHERE ordering < $current_order AND catid= $catid ";
        }
        if($direction == 'down')
        {
            $query2 = "SELECT MIN(ordering)AS ordering FROM #__sponsorwall WHERE ordering > $current_order AND catid= $catid ";
        }

        $this->_db->setQuery($query2);
        $object = $this->_db->loadObject();
        $new_order = $object->ordering;

        $query3 = "SELECT id FROM #__sponsorwall WHERE ordering = $new_order AND catid= $catid ";
        $this->_db->setQuery($query3);
        $object = $this->_db->loadObject();
        $new_id = $object->id;

        $query4 = "UPDATE #__sponsorwall SET ordering = $new_order WHERE id= $id AND catid= $catid ";
        $this->_db->setQuery($query4);
        $this->_db->query();

        $query5 = "UPDATE #__sponsorwall SET ordering = $current_order WHERE id= $new_id AND catid= $catid ";
        $this->_db->setQuery($query5);
        $this->_db->query();
//        $row = & $this->getTable();
//        if(!$row->load($this->_id))
//        {
//            $this->setError($this->_db->getErrorMsg());
//            return false;
//        }
//
//        if(!$row->move($direction, ' published >= 0 '))
//        {
//            $this->setError($this->_db->getErrorMsg());
//            return false;
//        }

        return true;
    }

    /**
     * Method to move a weblink
     *
     * @access	public
     * @return	boolean	True on success
     * @since	1.5
     */
    function saveorder($cid = array(),$order)
    {

        $row = & $this->getTable();
        $groupings = array();

        // update ordering values
        for($i = 0; $i < count($cid); $i++)
        {
            $row->load((int) $cid[$i]);
            // track categories
            $groupings[] = $row->catid;

            if($row->ordering != $order[$i])
            {
                $row->ordering = $order[$i];
                if(!$row->store())
                {
                    $this->setError($this->_db->getErrorMsg());
                    return false;
                }
            }
        }

        // execute updateOrder for each parent group
        $groupings = array_unique($groupings);
        foreach($groupings as $group)
        {
            $row->reorder('catid = ' . (int) $group);
        }

        return true;
    }

}

