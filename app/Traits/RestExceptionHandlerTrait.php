<?php

namespace RESTfullServiceTest\Traits;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use RESTfullServiceTest\Errors\AuthenticationErrorHandler;
use RESTfullServiceTest\Errors\AuthorizationErrorHandler;
use RESTfullServiceTest\Errors\BadRequestErrorHandler;
use RESTfullServiceTest\Errors\ModelNotFoundErrorHandler;
use RESTfullServiceTest\Errors\ValidationErrorHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

trait RestExceptionHandlerTrait
{

    /**
     * @var array
     */
    protected $exceptionHandlers = [
        AuthenticationException::class          => AuthenticationErrorHandler::class,
        ValidationException::class              => ValidationErrorHandler::class,
        ModelNotFoundException::class           => ModelNotFoundErrorHandler::class,
        AuthorizationException::class           => AuthorizationErrorHandler::class,
        MethodNotAllowedHttpException::class    => ModelNotFoundErrorHandler::class
    ];

    /**
     * Creates a new JSON response based on exception type.
     *
     * @param Request $request
     * @param Exception $e
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getJsonResponseForException(Request $request, Exception $e)
    {
        $handler = $this->exceptionHandlers[get_class($e)];
        if ( $handler )
        {
            return (new $handler())->handle();
        }
        return (new BadRequestErrorHandler())->handle();
    }

}