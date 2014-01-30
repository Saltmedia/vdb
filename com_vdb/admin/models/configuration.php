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
class sponsorwallModelconfiguration extends JModelLegacy
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
            $query = ' SELECT * FROM #__sponsorwall_config where id=1';

            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if(!$this->_data)
        {
            $this->_data = new stdClass();
            $this->_data->id = 0;
            $this->_data->jquery_load = null;
            $this->_data->jquery_conflict = null;
            $this->_data->category_status = null;
            $this->_data->cat_desc_status = null;
            $this->_data->default_category = null;
            $this->_data->cat_section_height = null;
            $this->_data->cat_img_width = null;
            $this->_data->cat_img_height = null;
            $this->_data->category_gap = null;
            $this->_data->cat_section_background_color = null;
            $this->_data->cat_section_title_background_color = null;
            $this->_data->cat_sec_title_font_color = null;
            $this->_data->cat_section_title = null;
            $this->_data->cat_section_box_background_color = null;
            $this->_data->dist_cat_sec = null;

            $this->_data->upper_block_width = null;
            $this->_data->upper_block_height = null;
            $this->_data->img_width = null;
            $this->_data->img_height = null;
            $this->_data->wall_gap = null;
            $this->_data->wall_movement = null;

            $this->_data->caption_background_color = null;
            $this->_data->caption_title_color = null;

            $this->_data->title_font_color = null;
            $this->_data->cat_sec_title_font_size = null;
            $this->_data->margin_bet_title_desc = null;

            $this->_data->caption_desc_color = null;
            $this->_data->desc_font_size = null;
            $this->_data->margin_bet_desc_link = null;

            $this->_data->caption_link_color = null;
            $this->_data->link_font_size = null;

            $this->_data->link_open_type = null;
            $this->_data->link_or_click = null;
            $this->_data->link_word = null;

            //border image per page and border status added by niraj
            $this->_data->wall_per_page = null;
            $this->_data->border_status = null;
            $this->_data->border_color = null;
            $this->_data->default_category_module = null;
            $this->_data->general_font_family = null;
            $this->_data->wall_border_color = null;
            $this->_data->wall_border_size = null;
            $this->_data->wall_sec_title_bg_color = null;
            $this->_data->wall_sec_title_font_color = null;
            $this->_data->wall_sec_title_font_size = null;
            $ths->_data->cat_name_font_color = null;
            $ths->_data->cat_name_font_size = null;

            $ths->_data->wall_name_font_color = null;
            $ths->_data->wall_name_font_size = null;
        }
        return $this->_data;
    }

    function &getwalldata()
    {
        // Load the data

        $query = 'SELECT * FROM #__sponsorwall';

        $this->_db->setQuery($query);
        $this->walldata = $this->_getList($query);

        return $this->walldata;
    }

    function store()
    {


        $row = & $this->getTable();

        $data = JRequest::get('post');


        if($_FILES['background_img']['tmp_name'] != "")
        {
            $img_name = $_FILES['background_img']['name'];
            $newimage = JPATH_COMPONENT_SITE . DS . 'images' . DS . $img_name;
            $result = @move_uploaded_file($_FILES['background_img']['tmp_name'],$newimage);
            $data['background_img'] = $img_name;
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

    function &getCategories()
    {
        if(empty($this->_categories))
        {
            $query = 'SELECT * FROM #__sponsorwall_category';
            $this->_categories = $this->_getList($query);
        }
        return $this->_categories;
    }

}

