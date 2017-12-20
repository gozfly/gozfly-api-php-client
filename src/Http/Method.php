<?php
/**
 * gozfly-client
 * Method.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Jonathan Nuñez <gozfly@gmail.com>
 * @date     8/22/17 09:15
 * @license  http://www.gozfly.com/projects/gozfly-client/license.txt gozfly-client License
 * @version  GIT: 1.0
 * @link     http://www.gozfly.com/projects/gozfly-client/
 */

namespace Gozfly\Http;

use Gozfly\AbstractEnum;

class Method extends AbstractEnum
{

    /**
     *
     */
    const CONNECT = 'CONNECT';

    /**
     * The GET method requests a representation of the specified resource.
     * Requests using GET should only retrieve data.
     */
    const GET = 'GET';

    /**
     *
     */
    const HEAD = 'HEAD';

    /**
     *
     */
    const POST = 'POST';

    /**
     *
     */
    const PUT = 'PUT';

    /**
     *
     */
    const PATCH = 'PATCH';

    /**
     *
     */
    const OPTIONS = 'OPTIONS';

    /**
     *
     */
    const DELETE = 'DELETE';

    /**
     *
     */
    const TRACE = 'TRACE';
}
