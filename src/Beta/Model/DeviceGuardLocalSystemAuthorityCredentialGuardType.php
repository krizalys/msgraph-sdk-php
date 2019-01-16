<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceGuardLocalSystemAuthorityCredentialGuardType File
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

use Microsoft\Graph\Core\Enum;

/**
* DeviceGuardLocalSystemAuthorityCredentialGuardType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceGuardLocalSystemAuthorityCredentialGuardType extends Enum
{
    /**
    * The Enum DeviceGuardLocalSystemAuthorityCredentialGuardType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ENABLE_WITH_UEFI_LOCK = "enableWithUEFILock";
    const ENABLE_WITHOUT_UEFI_LOCK = "enableWithoutUEFILock";
}