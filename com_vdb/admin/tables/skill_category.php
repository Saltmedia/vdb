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
class Tableskill_category extends JTable
{

    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
    var $name = null;
    var $image = null;
  
    function Tableskill_category(& $db)
    {
        parent::__construct('#__vdb_skill_categories', 'id', $db);
    }

}

