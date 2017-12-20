<?php
/**
 * gozfly-client
 * Exception.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Jonathan Nuñez <je.nunez@gozfly.com>
 * @date     8/17/17 23:11
 * @license  http://www.gozfly.com/projects/gozfly-client/license.txt gozfly-client License
 * @version  GIT: 1.0
 * @link     http://www.gozfly.com/projects/gozfly-client/
 */

namespace Gozfly;

/**
 * Class Exception
 * @package Gozfly
 */
class Exception extends \Exception
{
    /**
     * Error's description
     *
     * @var string
     */
    protected $description;

    /**
     * Exception constructor.
     * @param string $message
     * @param int $code
     * @param null $previousException
     * @param $description
     */
    public function __construct(
        $message = "",
        $code = 0,
        $previousException = null,
        $description
    ) {
        parent::__construct($message, $code, $previousException);
        $this->description = $description;
    }

    /**
     * Get textual description that summarizes error.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
