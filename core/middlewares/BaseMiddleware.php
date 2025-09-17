<?php


namespace app\core\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author Reza Mobaraki <rezam578@gmail.com>
 * @package app\core\middlewares
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}