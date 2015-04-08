<?php
/**
* @package    JJ_Custom_Assets
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All rights reserved.
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Custom Assets installation script class.
 *
 * @since  1.0.0
 */
class plgSystemCustom_assetsInstallerScript
{
	/**
	 * Function called before plugin installation/update/removal procedure commences
	 *
	 * @param   string                   $type    The type of change (install, update or discover_install,
	 *                                            not uninstall)
	 * @param   JInstallerAdapterModule  $parent  The class calling this method
	 *
	 * @return  boolean  true on success and false on failure
	 *
	 * @since   1.0.0
	 */
	public function preflight($type, $parent)
	{
		$version = new JVersion;
		
		if(!$version->isCompatible('3.4.0'))
		{
			JFactory::getApplication()->enqueueMessage(JText::_('JJ_CUSTOM_ASSETS_JOOMLA_VERSION_OUTDATED'), 'error');
			
			return false;
		}
	}

}

?>
