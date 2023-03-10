<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador se encarga de manejar reseteos de contraseña
    |
    */

    use ResetsPasswords;

    /**
     * Donde se dirige el usuario una vez ha reseteado la contraseña:
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
