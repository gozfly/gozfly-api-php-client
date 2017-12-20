<?php
/**
 * gozfly-client
 * AbstractEnum.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Jonathan Nuñez <gozfly@gmail.com>
 * @date     8/22/17 09:10
 * @license  http://www.gozfly.com/projects/gozfly-client/license.txt gozfly-client License
 * @version  GIT: 1.0
 * @link     http://www.gozfly.com/projects/gozfly-client/
 */

namespace Gozfly;

/**
 * Class AbstractEnum
 *
 * @package Gozfly
 */
abstract class AbstractEnum
{

    /**
     * @return array
     */
    public static function getMap()
    {
        $spl = new \ReflectionClass(get_called_class());
        return $spl->getConstants();
    }

    /**
     * @return array
     */
    public static function getValues()
    {
        return array_values(static::getMap());
    }
}
