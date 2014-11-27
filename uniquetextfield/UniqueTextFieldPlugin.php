<?php
namespace Craft;

/**
 * Unique Text Field Plugin
 */
class UniqueTextFieldPlugin extends BasePlugin
{
    /**
     * Name accessor
     * @return String Name of this plugin
     */
    public function getName()
    {
         return Craft::t('Unique Text Field');
    }

    /**
     * Version accessor
     * @return string Version of this plugin
     */
    public function getVersion()
    {
        return '1.1';
    }

    public function getDeveloper()
    {
        return 'FUEL Digital';
    }

    /**
     * developerUrl accessory
     * @return string URL of this plugin's developer
     */
    public function getDeveloperUrl()
    {
        return 'http://fuel-digital.com';
    }
}