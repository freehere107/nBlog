<?php

namespace App\Http\Middleware;

use Closure;
use Mockery\CountValidator\Exception;
use Route;

class CheckParams
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($this->checkParams($request->all(), $this->getRequireParams()) == false) {
            return response()->json(['errorCode' => -1]);
        }
        return $next($request);
    }


    private function getRequireParams()
    {

        $requireParams = [
            'App\Http\Controllers\Api\PostController@list' => ['type'],
            'App\Http\Controllers\Api\PostController@publishContent' => ['userID', 'content', 'title']
        ];

        return collect($requireParams)->has(Route::current()->getActionName()) ? $requireParams[Route::current()->getActionName()] : [];
    }


    private function checkParams(array $request, $params = [])
    {
        if (empty($params)) {
            return true;
        } else {
            $filter = collect($request)->keys()->all();
            foreach ($params as $k) {
                if (!in_array($k, $filter)) {
                    return false;
                }
            }
            return true;
        }
    }
}
