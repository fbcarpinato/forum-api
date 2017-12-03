<?php

namespace RESTfullServiceTest\Errors;


class ModelNotFoundErrorHandler extends ErrorHandler
{
    /**
     * @var string
     */
    protected $message = 'Resource not found';
    /**
     * @var int
     */
    protected $status_code = 404;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}