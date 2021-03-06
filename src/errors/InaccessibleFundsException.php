<?php

namespace craftnet\errors;

use Throwable;
use yii\base\Exception;

class InaccessibleFundsException extends Exception
{
    /**
     * Constructor
     *
     * @param string|null $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = null, int $code = 0, Throwable $previous = null)
    {
        if ($message === null) {
            $message = 'Unable to acquire a lock on funds';
        }

        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Inaccessible Funds';
    }
}
