<?php
namespace hoyTampico\Http\Controllers\Auth;
use hoyTampico\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use hoyTampico\Usuario;
use hoyTampico\Role;
use hoyTampico\User;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    #protected $redirectTo = '/noticias/create';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath(){
        if (auth()->user()->roles()->where('role_id','=','1')->first()) {
            return '/noticias/create';
        }
        return '/funcionario';
        
    }
}