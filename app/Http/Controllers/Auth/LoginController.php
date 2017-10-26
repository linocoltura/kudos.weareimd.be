<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->findOrCreateUser($user);
        return redirect('/users');
        // $user->token;
    }
    public function findOrCreateUser($user){
        $userID = (int)$user->getID();
        $authUser = User::where('facebook_id', $userID)->first();
        if ($authUser) {
            Auth::login($authUser, true);
            return $authUser;
        }else{
            User::create([
                'gender' => $user->user['gender'],
                'avatar' => $user->avatar_original,
                'name' => $user->getName(),
                'facebook_id' => $userID,
            ]);
            Auth::login($user, true);
        }
    }




}
