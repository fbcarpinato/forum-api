<?php

namespace Forum\Errors;


use Symfony\Component\HttpFoundation\Response;

class ModelNotFoundErrorHandler extends ErrorHandler
{
    /**
     * @var string
     */
    protected $message = 'Resource not found';
    /**
     * @var int
     */
    protected $status_code = Response::HTTP_NOT_FOUND;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}