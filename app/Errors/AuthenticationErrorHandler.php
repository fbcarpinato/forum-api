<?php

namespace RESTfullServiceTest\Errors;


class AuthenticationErrorHandler extends ErrorHandler
{

    /**
     * @var string
     */
    protected $message = 'Unauthenticated';
    /**
     * @var int
     */
    protected $status_code = 401;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}