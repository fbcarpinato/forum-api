<?php

namespace RESTfullServiceTest\Errors;


use Symfony\Component\HttpFoundation\Response;

class BadRequestErrorHandler extends ErrorHandler
{

    /**
     * @var string
     */
    protected $message = 'Bad Request';
    /**
     * @var int
     */
    protected $status_code = Response::HTTP_BAD_REQUEST;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    function handle()
    {
        return $this->respond(['error' => $this->message], $this->status_code);
    }
}