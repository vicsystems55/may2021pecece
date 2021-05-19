<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use Socialite;

class SocialiteController extends Controller
{

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {


        $user = Socialite::driver($provider)->stateless()->user(); 


        $exist = User::where('provider_id', $user->getId() )->where('email', $user->getEmail() )->first();

        if ($exist) {
            # code...

            auth()->login($exist);

            return redirect('/choose');

        }else{

            $demail = $user->getEmail();
            $new_username = substr($demail, 0, strpos($demail, '@'));
      
           

            $user_data = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'username' => $new_username,
                'avatar' => $user->getAvatar(),
                'provider' =>$provider,
                'provider_id' => $user->getId(),
                'password' => Hash::make($user->getEmail()),
            ]);
    
            
    
            auth()->login($user_data);
    
            return redirect('/choose');
        }



        // $user->token;
    }
}
