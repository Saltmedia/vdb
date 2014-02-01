<?php
// No direct access
 
defined( '_JEXEC' ) or die( 'Restricted access' );
 
jimport('joomla.application.component.controller');
 
/**
 * Gallery XML Component Controller
 */
class vdbControllervdb extends JControllerLegacy
{

	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	
	/**
	 * display the edit form
	 * @return void
	 */
	function __construct()
	{
		parent::__construct();

		// Register Extra tasks
		$this->registerTask( 'add'  , 	'edit' );
	}
	
	
 
}
