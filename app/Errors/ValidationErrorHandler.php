<?php

namespace Forum\Errors;


use Symfony\Component\HttpFoundation\Response;

class ValidationErrorHandler extends ErrorHandler
{
    /**
     * @var string
     */
    protected $message = 'Validation Failed';
    /**
     * @var int
     */
    protected $status_code = Response::HTTP_UNPROCESSABLE_ENTITY;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}