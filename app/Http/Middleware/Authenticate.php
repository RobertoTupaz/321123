<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // dd(\Request::route()->getName());

        $routeName = \Request::route()->getName();
        if(
            $routeName == 'user2Home' ||
            $routeName == 'user2Publication' ||
            $routeName == 'user2Evaluation' ||
            $routeName == 'user2Signatories'
        ) {
            
            return route('user2Login');

        } else if ($routeName == 'psbEvaluation') {

            return route('user2Login');

        } else {
            return $request->expectsJson() ? null : route('login');
        }
    }
}
