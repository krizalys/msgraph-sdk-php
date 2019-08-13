<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGuardVirtualizationBasedSecurityHardwareRequirementState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* DeviceGuardVirtualizationBasedSecurityHardwareRequirementState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceGuardVirtualizationBasedSecurityHardwareRequirementState extends Enum
{
    /**
    * The Enum DeviceGuardVirtualizationBasedSecurityHardwareRequirementState
    */
    const MEET_HARDWARE_REQUIREMENTS = "meetHardwareRequirements";
    const SECURE_BOOT_REQUIRED = "secureBootRequired";
    const DMA_PROTECTION_REQUIRED = "dmaProtectionRequired";
    const HYPER_V_NOT_SUPPORTED_FOR_GUEST_VM = "hyperVNotSupportedForGuestVM";
    const HYPER_V_NOT_AVAILABLE = "hyperVNotAvailable";
}