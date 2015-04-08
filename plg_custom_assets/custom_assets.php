<?php
/**
* @package    JJ_Custom_Assets
* @copyright  Copyright (C) 2011 - 2015 JoomJunk. All rights reserved.
* @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

class plgSystemCustom_assets extends JPlugin
{
		
	public function group_by_key($array) 
	{
		$result = array();
		
		foreach ($array as $sub) 
		{
			foreach ($sub as $k => $v) 
			{
				$result[$k][] = $v;
			}
		}
		return $result;
	}
		
	public function onBeforeCompileHead()
	{
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
		
		// Only load the assets in the frontend
		if ($app->isSite()) 
		{
			// Get json array of JS and CSS files
			$js_assets 	= $this->params->get('js_assets');
			$css_assets = $this->params->get('css_assets');
			
			// Decode the json array
			$js_json 	= json_decode($js_assets, true);
			$css_json 	= json_decode($css_assets, true);
			
			$js_filter  = $this->group_by_key($js_json);
			$css_filter = $this->group_by_key($css_json);
			
			// Inject the JS
			foreach ($js_filter as $index => $js)
			{
				$doc->addScript($js[0]);
			}
			// Inject the CSS
			foreach ($css_filter as $index => $css)
			{
				$doc->addStylesheet($css[0]);
			}
		}

	}
	
}

?>
