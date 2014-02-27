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
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Hello Table class
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class Tableopportunity extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;
	
	var $causeid = null;

	var $orgid = null;

	var $locid = null;

	var $title = null;
	
	var $desc = null;
	
	var $contact = null;
	
	var $phone = null;

	var $email = null;
	
	var $url = null;
	
	var $image = null;
	
	var $published = null;
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function Tableopportunity(& $db) {
		parent::__construct('#__vdb_opportunities', 'id', $db);
	}
}