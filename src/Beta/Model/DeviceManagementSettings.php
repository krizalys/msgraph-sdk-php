<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementSettings File
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
* DeviceManagementSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagementSettings extends Entity
{
    /**
    * Gets the deviceComplianceCheckinThresholdDays
    * The number of days a device is allowed to go without checking in to remain compliant. Valid values 0 to 120
    *
    * @return int The deviceComplianceCheckinThresholdDays
    */
    public function getDeviceComplianceCheckinThresholdDays()
    {
        if (array_key_exists("deviceComplianceCheckinThresholdDays", $this->_propDict)) {
            return $this->_propDict["deviceComplianceCheckinThresholdDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceComplianceCheckinThresholdDays
    * The number of days a device is allowed to go without checking in to remain compliant. Valid values 0 to 120
    *
    * @param int $val The value of the deviceComplianceCheckinThresholdDays
    *
    * @return DeviceManagementSettings
    */
    public function setDeviceComplianceCheckinThresholdDays($val)
    {
        $this->_propDict["deviceComplianceCheckinThresholdDays"] = $val;
        return $this;
    }
    /**
    * Gets the isScheduledActionEnabled
    * Is feature enabled or not for scheduled action for rule.
    *
    * @return bool The isScheduledActionEnabled
    */
    public function getIsScheduledActionEnabled()
    {
        if (array_key_exists("isScheduledActionEnabled", $this->_propDict)) {
            return $this->_propDict["isScheduledActionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isScheduledActionEnabled
    * Is feature enabled or not for scheduled action for rule.
    *
    * @param bool $val The value of the isScheduledActionEnabled
    *
    * @return DeviceManagementSettings
    */
    public function setIsScheduledActionEnabled($val)
    {
        $this->_propDict["isScheduledActionEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the secureByDefault
    * Device should be noncompliant when there is no compliance policy targeted when this is true
    *
    * @return bool The secureByDefault
    */
    public function getSecureByDefault()
    {
        if (array_key_exists("secureByDefault", $this->_propDict)) {
            return $this->_propDict["secureByDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secureByDefault
    * Device should be noncompliant when there is no compliance policy targeted when this is true
    *
    * @param bool $val The value of the secureByDefault
    *
    * @return DeviceManagementSettings
    */
    public function setSecureByDefault($val)
    {
        $this->_propDict["secureByDefault"] = $val;
        return $this;
    }
    /**
    * Gets the enhancedJailBreak
    * Is feature enabled or not for enhanced jailbreak detection.
    *
    * @return bool The enhancedJailBreak
    */
    public function getEnhancedJailBreak()
    {
        if (array_key_exists("enhancedJailBreak", $this->_propDict)) {
            return $this->_propDict["enhancedJailBreak"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enhancedJailBreak
    * Is feature enabled or not for enhanced jailbreak detection.
    *
    * @param bool $val The value of the enhancedJailBreak
    *
    * @return DeviceManagementSettings
    */
    public function setEnhancedJailBreak($val)
    {
        $this->_propDict["enhancedJailBreak"] = $val;
        return $this;
    }
    /**
    * Gets the deviceInactivityBeforeRetirementInDay
    * When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
    *
    * @return int The deviceInactivityBeforeRetirementInDay
    */
    public function getDeviceInactivityBeforeRetirementInDay()
    {
        if (array_key_exists("deviceInactivityBeforeRetirementInDay", $this->_propDict)) {
            return $this->_propDict["deviceInactivityBeforeRetirementInDay"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceInactivityBeforeRetirementInDay
    * When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
    *
    * @param int $val The value of the deviceInactivityBeforeRetirementInDay
    *
    * @return DeviceManagementSettings
    */
    public function setDeviceInactivityBeforeRetirementInDay($val)
    {
        $this->_propDict["deviceInactivityBeforeRetirementInDay"] = $val;
        return $this;
    }

    /**
    * Gets the derivedCredentialProvider
    * The Derived Credential Provider to use for this account.
    *
    * @return DerivedCredentialProviderType The derivedCredentialProvider
    */
    public function getDerivedCredentialProvider()
    {
        if (array_key_exists("derivedCredentialProvider", $this->_propDict)) {
            if (is_a($this->_propDict["derivedCredentialProvider"], "Microsoft\Graph\Model\DerivedCredentialProviderType")) {
                return $this->_propDict["derivedCredentialProvider"];
            } else {
                $this->_propDict["derivedCredentialProvider"] = new DerivedCredentialProviderType($this->_propDict["derivedCredentialProvider"]);
                return $this->_propDict["derivedCredentialProvider"];
            }
        }
        return null;
    }

    /**
    * Sets the derivedCredentialProvider
    * The Derived Credential Provider to use for this account.
    *
    * @param DerivedCredentialProviderType $val The value to assign to the derivedCredentialProvider
    *
    * @return DeviceManagementSettings The DeviceManagementSettings
    */
    public function setDerivedCredentialProvider($val)
    {
        $this->_propDict["derivedCredentialProvider"] = $val;
         return $this;
    }
    /**
    * Gets the derivedCredentialUrl
    * The Derived Credential Provider self-service URI.
    *
    * @return string The derivedCredentialUrl
    */
    public function getDerivedCredentialUrl()
    {
        if (array_key_exists("derivedCredentialUrl", $this->_propDict)) {
            return $this->_propDict["derivedCredentialUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the derivedCredentialUrl
    * The Derived Credential Provider self-service URI.
    *
    * @param string $val The value of the derivedCredentialUrl
    *
    * @return DeviceManagementSettings
    */
    public function setDerivedCredentialUrl($val)
    {
        $this->_propDict["derivedCredentialUrl"] = $val;
        return $this;
    }
}
