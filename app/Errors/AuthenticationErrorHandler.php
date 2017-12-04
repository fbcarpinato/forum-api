<?php

namespace Forum\Errors;


use Symfony\Component\HttpFoundation\Response;

class AuthenticationErrorHandler extends ErrorHandler
{

    /**
     * @var string
     */
    protected $message = 'Unauthenticated';
    /**
     * @var int
     */
    protected $status_code = Response::HTTP_UNAUTHORIZED;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}