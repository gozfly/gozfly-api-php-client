<?php
/**
 * gozfly-client
 * bootstrap.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Jonathan Nuñez <je.nunez@gozfly.com>
 * @date     8/17/17 22:12
 * @license  http://www.gozfly.com/projects/gozfly-client/license.txt gozfly-client License
 * @version  GIT: 1.0
 * @link     http://www.gozfly.com/projects/gozfly-client/
 */

$pathToDotEnvFile = dirname(__DIR__);
if (file_exists($pathToDotEnvFile . '/.env')) {
    $dotenv = new Dotenv\Dotenv($pathToDotEnvFile);
    $dotenv->load();
} elseif (empty(getenv('GOZFLY_CLIENT_ID')) || empty(getenv('GOZFLY_CLIENT_SECRET'))) {
    echo "Create .env file with credentials or setup environment variables GOZFLY_CLIENT_ID & GOZFLY_CLIENT_SECRET to make tests pass.";
}
