<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    | 
    |
    | Este controlador es responsable de manejar resets de contraseña e 
    | incluye ayuda para mandar notificaciones desde la aplicación a los 
    | usuarios
    |
    */

    use SendsPasswordResetEmails;
}
