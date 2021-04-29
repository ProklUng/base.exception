<?php

namespace Prokl\BaseException;

use Exception;

/**
 * Class BaseException
 * Базовые исключения.
 * @package Prokl\BaseException
 * @codeCoverageIgnore
 */
class BaseException extends Exception implements ExceptionInterface
{
    /**
     * Ошибку в строку.
     *
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
