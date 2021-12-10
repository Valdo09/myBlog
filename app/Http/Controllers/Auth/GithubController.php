<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
   public function auth()
   {
    return Socialite::driver('github')->redirect();
   }
   public function redirect()
   {
    $user = Socialite::driver('github')->stateless()->user();
   $newUser=User::firstOfCreate([
'email'=>$user->email
   ],[
       'name'=>$user->name,
       'password'=>Hash::make(Str::random(24))
   ]);
   Auth::login($newUser);
   }
}
