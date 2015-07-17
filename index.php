<?php
/**
 * @author  Andrew Turnbull
 * @version 0.1.0
 * @package Proton Framework
 */

namespace ENVProton;

/**
 * Main functions file. Required in all scripts that wish to use Proton framework
 */
require 'functions.php';

/**
 * URI handler. Routers user request to appropriate page/logic controller
 */
$sessionRouter = new URIRouter(array("uri"=>$_SERVER['REQUEST_URI']));