<?php

namespace Forum\Errors;


use Symfony\Component\HttpFoundation\Response;

class AuthorizationErrorHandler extends ErrorHandler
{

    /**
     * @var string
     */
    protected $message = 'Unauthorized';
    /**
     * @var int
     */
    protected $status_code = Response::HTTP_FORBIDDEN;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}