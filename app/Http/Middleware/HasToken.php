<?php
namespace App\Http\Middleware;
use Closure;
use App\User;
class HasToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $this->token($request);
        if ($token && !!User::whereToken($token)->exists()) {
            return $next($request);
        }
        return response([
            'status' => false,
            'message' => 'Token Not Valid',
        ], 401);
    }
    public function token($request)
    {
        return $request->header('token', $request->has('token') ? $request->token : false);
    }
}
