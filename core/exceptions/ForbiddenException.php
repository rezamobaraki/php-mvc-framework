<?php


namespace app\core\exceptions;


/**
 * Class ForbiddenException
 *
 * @author Reza Mobaraki <rezam578@gmail.com>
 * @package app\core\exceptions
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}