<?php
/**
 * Created by PhpStorm.
 * User: hadv
 * Date: 5/2/17
 * Time: 11:36 PM.
 */

namespace App\Http\Middleware;

use Log;
use Illuminate\Http\Request;
use Closure;

class RequestLogMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info("Request Log\n".sprintf("~~~~~\n%s~~~~~~", (string) $request));

        return $next($request);
    }
}
