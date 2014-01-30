<?php

/**
 * Hello World table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license		GNU/GPL
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Hello Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class Tableconfiguration extends JTable
{

    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;

    /**
     * @var string
     */
    var $jquery_load = null;
    var $jquery_conflict = null;
    var $category_status = null;
    var $cat_desc_status = null;
    var $default_category = null;
    var $cat_section_height = null;
    var $cat_img_width = null;
    var $cat_img_height = null;
    var $category_gap = null;
    var $cat_section_background_color = null;
    var $cat_section_title_background_color = null;
    var $cat_sec_title_font_color = null;
    var $cat_section_title = null;
    var $cat_section_box_background_color = null;
    var $dist_cat_sec = null;
    var $upper_block_width = null;
    var $upper_block_height = null;
    var $img_width = null;
    var $img_height = null;
    var $wall_gap = null;
    var $wall_movement = null;
    var $caption_background_color = null;
    var $caption_title_color = null;
    var $title_font_color = null;
    var $cat_sec_title_font_size = null;
    var $margin_bet_title_desc = null;
    var $caption_desc_color = null;
    var $desc_font_size = null;
    var $margin_bet_desc_link = null;
    var $caption_link_color = null;
    var $link_font_size = null;
    var $link_open_type = null;
    var $link_or_click = null;
    var $link_word = null;
    var $wall_per_page = null;
    var $border_status = null;
    var $border_color = null;
    var $default_category_module = null;
    var $general_font_family = null;
    var $wall_border_color = null;
    var $wall_border_size = null;
    var $wall_sec_title_bg_color = null;
    var $wall_sec_title_font_size = null;
    var $wall_sec_title_font_color = null;
    var $cat_name_font_color = null;
    var $cat_name_font_size = null;
    var $wall_name_font_color = null;
    var $wall_name_font_size = null;

    /**
     * Constructor
     *
     * @param object Database connector object
     */
    function Tableconfiguration(& $db)
    {
        parent::__construct('#__sponsorwall_config','id',$db);
    }

}

