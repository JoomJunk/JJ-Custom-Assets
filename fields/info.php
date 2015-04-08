<?php
/**
* @package    JJ_Custom_Assets
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All rights reserved.
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/
defined('JPATH_PLATFORM') or die;

class JFormFieldInfo extends JFormField
{
	/**
	 * @var string
	 */
	public $type = 'Info';
	/**
	 * @return string
	 */
	protected function getLabel()
	{
		$info = '<p>When importing local assets, ensure you use a forward slash (<code>/</code>) before the path. The paths should also be relative to the root of your Joomla installation.</p>';
		$info .= '<p>See the example below:</p>';
		$info .= '<p><pre>/media/jui/js/html5.js</pre></p>';
		
		return $info;
	}
	/**
	 * @return mixed
	 */
	protected function getInput()
	{
        return;
	}
	
}
