<?php

namespace RESTfullServiceTest\Errors;


abstract class ErrorHandler
{
    /**
     * @return mixed
     */
    abstract  function handle();

    /**
     * @param array $payload
     * @param int $status_code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respond($payload = [], $status_code = 404)
    {
        return response()->json($payload, $status_code);
    }
}