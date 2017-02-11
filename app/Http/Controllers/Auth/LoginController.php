<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, Guard $guard, User $user)
    {
//        $this->middleware('guest', ['except' => 'logout']);
        $this->request = $request;
        $this->auth = $guard;
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginRender(){
        return view('auth.login');
    }

    public function loginAction()
    {
        if ($this->authenticate($this->request->get('email'), $this->request->get('password'))) {
            return view('dashboard.dashboard');
        }

        if (!$this->authenticate($this->request->get('email'), $this->request->get('password'))) {
            $user = $this->getUserNameAndPassword();
            if (empty($user)) {
                return redirect()->back()->with('message', 'danger|'.trans('User not exists in the system.'));
            }
            return redirect()->back()->with('message', 'danger|'.trans('Try again the user name or password is wrong'));
        }

    }

    /**
     * Checks whether the given credentials are correct.
     *
     * @param $login
     * @param $password
     *
     * @return bool
     */
    private function authenticate($login, $password)
    {
        $authByEmail = $this->auth->attempt(['email' => $login, 'password' => $password]);
        $authByUserName = $this->auth->attempt(['name' => $login, 'password' => $password]);

        // If user has entered a correct username or email, return true.
        return $authByEmail || $authByUserName;
    }

    /**
     * @return mixed
     */
    private function getUserNameAndPassword()
    {
        $user = $this->user
            ->where('email', '=', $this->request->get('email'))
            ->orWhere('name', $this->request->get('email'))->first();
        return $user;
    }


    /**
     * Logout when a user is login.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logoutAction()
    {
        $this->auth->logout();
        return redirect()->back()->with('message', 'info|'.trans('You logged out.'));
    }
}
