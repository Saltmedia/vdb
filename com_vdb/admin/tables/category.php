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
class Tablecategory extends JTable
{

    /**
     * Primary Key
     *
     * @var int
     */
    var $id = null;
    var $name = null;
    var $desc = null;
    var $image = null;
    var $ordering = null;
    var $published = null;

    function Tablecategory(& $db)
    {
        parent::__construct('#__sponsorwall_category', 'id', $db);
    }

}

