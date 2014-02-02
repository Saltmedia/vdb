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
class Tablecause extends JTable
{

    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
    var $causecatid = null;
    var $name = null;
  
    function Tablecause(& $db)
    {
        parent::__construct('#__vdb_causes', 'id', $db);
    }

}

