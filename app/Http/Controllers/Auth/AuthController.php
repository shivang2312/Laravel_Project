<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Illuminate\Support\Facades\Route;
use App\SocialProvider;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/user-dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

/*
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try
        {
            $user = Socialite::driver('google')->user();
        }
        catch(Exception $e)
        {
            return redirect('auth/google');
        }

        $authUser = $this->createUser($user);

        Auth::login($authUser, true);
        return redirect()->route('home');
    }

    public function createUser($user){
        $authUser = User::where('google_id', $user->id)->first();

        if($authUser)
        {
            return $authUser;
        }

        return User::create([
            'name' =>$user->name,
            'google_id' =>$user->id,
            'email' =>$user->email,
            'avatar' =>$user->avatar,
            ]);
    }

*/

/*

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->user();
        }
        catch(Exception $e)
        {
            return redirect('/');
        }

        $socialProvider = SocialProvider::where('provider_id', $socialUser->getId())->first();

        
        if(!$socialProvider)
        {
            
        SocialProvider::create(
                ['provider_id' =>$socialUser->getId(), 'provider' =>$provider]

                );

        }
        // else
        // {
        //     $user = $socialProvider->user;
        // }

        // SocialProvider::create(
        //     ['provider_id' =>$socialUser->getId(), 'provider' =>$provider]
        //     );

        auth()->login($socialUser);

        return redirect('/home');
    }

  */  
        
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try
        {
             $user = Socialite::driver($provider)->user();
        }
        catch(Exception $e)
        {
            return redirect('/');
        }

        $authUser = $this->createUser($user, $provider);
        Auth::login($authUser, true);

        if(Auth::User()->admin)
            return redirect('/dashboard');
        else
            return redirect('/user-dashboard');
    }

    public function createUser($user, $provider)
    {
        $authUser = User:: where('provider_id', $user->getId())->first();

        if($authUser)
            return $authUser;

        return User:: create([
            'name' =>$user->name,
            'provider_id'=>$user->getId(),
            'email'=>$user->getEmail(),
            'provider'=>$provider
            ]);
    }
}
