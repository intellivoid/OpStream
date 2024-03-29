<?php


    namespace OpStream\Exceptions;


    use Exception;
    use Throwable;

    /**
     * Class RadioBrowseException
     * @package OpStream\Exceptions
     */
    class RadioBrowseException extends Exception
    {
        /**
         * RadioBrowseException constructor.
         * @param string $message
         * @param int $code
         * @param Throwable|null $previous
         */
        public function __construct($message = "", $code = 0, Throwable $previous = null)
        {
            parent::__construct($message, $code, $previous);
        }
    }