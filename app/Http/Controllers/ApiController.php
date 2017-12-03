<?php

namespace RESTfullServiceTest\Http\Controllers;


use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    /**
     * Respond with a success message.
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondSuccess($data = [])
    {
        return $this->responde($data, 'Success');
    }

    /**
     * Respond with a success message for a deletion.
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondDeleted($data = [])
    {
        return $this->responde($data, 'Resource deleted');
    }

    /**
     * Respond with a 201 resource created success message.
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondCreated($data = [])
    {
        return $this->responde($data, 'Resource created', Response::HTTP_CREATED);
    }

    /**
     * Respond with a resource updated success message.
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondUpdated($data = [])
    {
        return $this->responde($data, 'Resource updated');
    }

    /**
     * Generic response template function
     *
     * @param array $data
     * @param string $message
     * @param int $status_code
     * @return \Illuminate\Http\JsonResponse
     */
    private function responde($data = [], $message = '', $status_code = Response::HTTP_OK)
    {
        return \Response::json([
            'data'  => $data,
            'meta'  => [
                'message'       => $message,
                'status_code'   => $status_code
            ]
        ], $status_code);
    }
}