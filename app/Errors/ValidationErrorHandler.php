<?php

namespace RESTfullServiceTest\Errors;


class ValidationErrorHandler extends ErrorHandler
{
    /**
     * @var string
     */
    protected $message = 'Validation Failed';
    /**
     * @var int
     */
    protected $status_code = 422;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}