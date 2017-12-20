<?php
/**
 * gozfly-client
 * Scope.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Jonathan Nuñez <gozfly@gmail.com>
 * @date     8/22/17 09:02
 * @license  http://www.gozfly.com/projects/gozfly-client/license.txt gozfly-client License
 * @version  GIT: 1.0
 * @link     http://www.gozfly.com/projects/gozfly-client/
 */

namespace Gozfly;

/**
 * Class Scope defines list of available permissions
 *
 * @package Gozfly
 */
class Scope extends AbstractEnum
{
    /**
     * Allows to read basic information about profile, such as name
     */
    const READ_BASIC_PROFILE = 'accounts.profile.basic';

    /**
     * Enables access to email address field
     */
    const READ_EMAIL_ADDRESS = 'accounts.profile.emailaddress';
}
