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
class Tableorganization extends JTable
{

    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
	var $causeid = null;
    var $locationid = null;
    var $name = null;
	var $desc = null;
	var $address = null;
	var $postalcode = null;
	var $contact = null;
	var $phone = null;
	var $email = null;
	var $image = null;
	var $published = null;
  
  
  
    function Tableorganization(& $db)
    {
        parent::__construct('#__vdb_organizations', 'id', $db);
    }

}

