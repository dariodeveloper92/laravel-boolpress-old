<?php

namespace App\Http\Middleware;


use Closure;
use App\User;

class CheckApiToken
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
        // recupoero l'autorizzazione token dalla request
        $auth_token = $request->header('authorization');

        // verifico se è presente il token di autorizzazione
        if(empty($auth_token)) {
            return response()->json([
                'success' => false,
                'error' => 'API Token mancante'
            ]);
        }

        // estrarre l'API Token di autorizzazione che è formato in questo modo: "Berear api_token" \ 7 = l'indice della chiave API
        $api_token = substr($auth_token, 7);
        
        //verifico la correttezza del'api token 
        $user = User::where('api_token', $api_token)->first();
        if(!$user) {
            return response()->json([
                'success' => false,
                'error' => 'API Token mancante'
            ]);
        }
        return $next($request);
    }
}
