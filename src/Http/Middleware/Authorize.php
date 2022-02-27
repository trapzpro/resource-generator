<?php

namespace Trapzpro\ResourceGenerator\Http\Middleware;

use Illuminate\Http\Request;
use Trapzpro\ResourceGenerator\ResourceGenerator;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return app(ResourceGenerator::class)->authorize($request)
        ? $next($request)
        : abort(403);
    }
}
