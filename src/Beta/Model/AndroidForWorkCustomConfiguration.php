<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkCustomConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* AndroidForWorkCustomConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkCustomConfiguration extends DeviceConfiguration
{

     /** 
     * Gets the omaSettings
    * OMA settings. This collection can contain a maximum of 500 elements.
     *
     * @return array The omaSettings
     */
    public function getOmaSettings()
    {
        if (array_key_exists("omaSettings", $this->_propDict)) {
           return $this->_propDict["omaSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the omaSettings
    * OMA settings. This collection can contain a maximum of 500 elements.
    *
    * @param OmaSetting $val The omaSettings
    *
    * @return AndroidForWorkCustomConfiguration
    */
    public function setOmaSettings($val)
    {
		$this->_propDict["omaSettings"] = $val;
        return $this;
    }
    
}