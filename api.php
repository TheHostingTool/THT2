<?php
/**
 * @author    TheHostingTool Group
 * @version   2.0.0
 * @package   thehostingtool/core
 * @license   MIT
 */
 
require 'vendor/autoload.php';

$server = new TheHostingTool\Api\Server(__DIR__);

$server->listen();
