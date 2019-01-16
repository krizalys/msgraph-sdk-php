<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosLobAppProvisioningConfigurationAssignment File
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
* IosLobAppProvisioningConfigurationAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosLobAppProvisioningConfigurationAssignment extends Entity
{
    /**
    * Gets the target
    * The target group assignment defined by the admin.
    *
    * @return DeviceAndAppManagementAssignmentTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * The target group assignment defined by the admin.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return IosLobAppProvisioningConfigurationAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}