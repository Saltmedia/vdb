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
class Tableskill extends JTable
{

    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
    var $skillcatid = null;
    var $name = null;
  
    function Tableskill(& $db)
    {
        parent::__construct('#__vdb_skills', 'id', $db);
    }

}

