<?php

namespace PHPMailer\PHPMailer;

class Exception extends \Exception
{
  
    protected $errorMessage = [];

    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        $this->errorMessage[] = $message;
        parent::__construct($message, $code, $previous);
    }

    public function errorMessage()
    {
        return $this->errorMessage;
    }
}
