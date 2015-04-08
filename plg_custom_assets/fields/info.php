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
		return JText::_('JJ_CUSTOM_ASSETS_INFO');
	}
	/**
	 * @return mixed
	 */
	protected function getInput()
	{
        return;
	}
	
}
