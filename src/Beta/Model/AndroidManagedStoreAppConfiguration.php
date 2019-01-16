<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppConfiguration File
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
* AndroidManagedStoreAppConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidManagedStoreAppConfiguration extends ManagedDeviceMobileAppConfiguration
{
    /**
    * Gets the packageId
    * Android Enterprise app configuration package id.
    *
    * @return string The packageId
    */
    public function getPackageId()
    {
        if (array_key_exists("packageId", $this->_propDict)) {
            return $this->_propDict["packageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the packageId
    * Android Enterprise app configuration package id.
    *
    * @param string $val The packageId
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setPackageId($val)
    {
        $this->_propDict["packageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the payloadJson
    * Android Enterprise app configuration JSON payload.
    *
    * @return string The payloadJson
    */
    public function getPayloadJson()
    {
        if (array_key_exists("payloadJson", $this->_propDict)) {
            return $this->_propDict["payloadJson"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadJson
    * Android Enterprise app configuration JSON payload.
    *
    * @param string $val The payloadJson
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setPayloadJson($val)
    {
        $this->_propDict["payloadJson"] = $val;
        return $this;
    }
    

     /** 
     * Gets the permissionActions
    * List of Android app permissions and corresponding permission actions.
     *
     * @return array The permissionActions
     */
    public function getPermissionActions()
    {
        if (array_key_exists("permissionActions", $this->_propDict)) {
           return $this->_propDict["permissionActions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the permissionActions
    * List of Android app permissions and corresponding permission actions.
    *
    * @param AndroidPermissionAction $val The permissionActions
    *
    * @return AndroidManagedStoreAppConfiguration
    */
    public function setPermissionActions($val)
    {
		$this->_propDict["permissionActions"] = $val;
        return $this;
    }
    
}