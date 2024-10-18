<?php

namespace PHPMailer\PHPMailer;

class Exception extends \Exception
{
    /**
     * Error messages.
     * @var string[]
     */
    protected $errorMessage = [];

    /**
     * Constructor.
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        $this->errorMessage[] = $message;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get error messages.
     * @return string[]
     */
    public function errorMessage()
    {
        return $this->errorMessage;
    }
}
