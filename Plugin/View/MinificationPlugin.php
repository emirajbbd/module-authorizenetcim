<?php


namespace Pmclain\AuthorizenetCim\Plugin\View;

use \Magento\Framework\View\Asset\Minification;

/**
 * MinificationPlugin
 *
 * @package  Pmclain\AuthorizenetCim\Plugin
 * 
 */
class MinificationPlugin
{
    /**
     * Exclude static componentry files from being minified.
     *
     * Using the config node `minify_exclude` is not an option because it does
     * not get merged but overridden by subsequent modules.
     *
     * @see \Magento\Framework\View\Asset\Minification::XML_PATH_MINIFICATION_EXCLUDES
     *
     * @param Minification $subject
     * @param string[] $result
     * @param string $contentType
     * @return string[]
     */
	public function afterGetExcludes(Minification $subject, array $result, $contentType)
    {
		$result = array();
        if ($contentType == 'js') {
            $result[]= 'https://js.authorize.net/v1/Accept.js';
        }
        return $result;
    }
}
