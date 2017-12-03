<?php

namespace RESTfullServiceTest\Errors;


class AuthorizationErrorHandler extends ErrorHandler
{

    /**
     * @var string
     */
    protected $message = 'Unauthorized';
    /**
     * @var int
     */
    protected $status_code = 403;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}