<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null|\Illuminate\Http\JsonResponse
     * @throws \Illuminate\Http\Exceptions\HttpResponseException
     */
    protected function redirectTo($request)
    {
        throw new HttpResponseException(response(['message' => 'Unauthorized.'], 401));
    }
}
