<?php

namespace App\Traits;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
 */

use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * Return a success JSON response.
     *
     * @param array|string $data
     * @param string|null $message
     * @param int|null $code
     * @return JsonResponse
     */
    protected function success($data, string $message = null, int $code = 200)
    {
        return response()->json([
            'message' => $message,
            'success' => true,
            'status' => ($code) ?: 200,
            'data' => $data
        ], ($code) ?: 200);
    }

    /**
     * Return an error JSON response.
     *
     * @param string|null $message
     * @param int $code
     * @param array|string|null $data
     * @return JsonResponse
     */
    protected function error(string $message = null, int $code, $data = null)
    {
        return response()->json([
            'error' => $message,
            'success' => false,
            'status' => ($code) ?: 500
        ], 500);
    }

}
