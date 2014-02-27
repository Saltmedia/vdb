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
class vdbModelopportunity extends JModelLegacy
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
            $query = ' SELECT * FROM #__vdb_opportunities ' .
                    '  WHERE id = ' . $this->_id;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if(!$this->_data)
        {
            $this->_data = new stdClass();
            $this->_data->id = 0;
            $this->_data->organizationcatid = null;
            $this->_data->name = null;
        }
        return $this->_data;
    }

    function store()
    {
        $row = & $this->getTable();
        $data = JRequest::get('post');
        $id = $data['id'];

       if($_FILES['image']['tmp_name'] != "")
        {
            $img_name = time() . '_' . $_FILES['image']['name'];
            $newimage = JPATH_COMPONENT_SITE . DS . 'images/organization_images' . DS . $img_name;
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

	     function getcause()
    {
        $db = JFactory::getDbo();
        $query = 'SELECT * FROM #__vdb_causes order by name';
        $max = $this->_getList($query);

        return $max;
    }

	     function getlocation()
    {
        $db = JFactory::getDbo();
        $query = 'SELECT * FROM #__vdb_locations order by name';
        $max = $this->_getList($query);

        return $max;
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

            echo $query = 'UPDATE #__vdb_opportunities'
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
	
	
}

