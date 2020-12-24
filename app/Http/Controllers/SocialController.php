<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Socialite;


class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {

        // return view('frontend.pages.user_type')->with('user',$user ?? 'null');
        /* try { */
            return $userSocial = Socialite::driver($provider)->stateless()->user();
             
        /* } catch (\Exception $e) {
            return redirect('/login');
        } */

        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if($user){
            if(!$user->hasAnyRole('endUser', 'sme-1', 'sme-2')){
                return view('frontend.pages.user_type')->with('user',$user);
            }
            Auth::login($user);
            return redirect('/');
        }
        else{
            $user = User::create([
                'name'          => $userSocial->getName(),
                'email'         => $userSocial->getEmail(),
                'profile_image' => $userSocial->getAvatar(),
                'password'      => Str::random(40),
                // 'provider_id'   => $userSocial->getId(),
                // 'provider'      => $provider,
            ]);
            if(!$user->hasAnyRole('endUser', 'sme-1', 'sme-2'))
                return view('frontend.pages.user_type')->with('user',$user);
            Auth::login($user);
            return redirect()->route('/');
        }

    }

    public function authenticate(Request $request,User $user)
    {
        $user->assignRole('end_user');
        // dd($user->getRoleNames());
        Auth::login($user);
        return redirect()->route('/');
    }

    public function googleCallback(Request $request){

        $validator = Validator::make($request->all(), [
            'name'           => 'required|string',
            'email'          => 'required|email',
            'google_token'   => 'required',
            'profile_image'  => 'nullable',
        ]);

        if ($validator->fails()) {
            $errors = [];
            foreach ($validator->errors()->getMessages() as $key => $value){
                $errors[] = $value[0];
            }
            return api_response((object)[],400,'Fields are Missing',$errors);
        }
        
        $user = User::where(['email' => $request->email])->first();

        if($user){

            $user = User::where('email',$request->email)->update(['google_token' => $request->google_token]);

            //find the user using his details.
            $user = User::where('email',$request->email)->where('google_token',$request->google_token)->first();
            //then use
            $token = JWTAuth::fromUser($user);
            
            return api_response([
                'user' => new UserResource($user),
                'access_token' =>  $token,
            ]);
        }
        else{
            
            $user = User::create([
                'name'              => $request->name,
                'email'             => $request->email,
                'profile_image'     => $request->profile_image,
                'password'          => Str::random(40),
                'google_token'      => $request->google_token,
            ]);
            $user->assignRole('admin');
            $user = User::where('email',$request->email)->where('google_token',$request->google_token)->first();

            $token = JWTAuth::fromUser($user);

            return api_response([
                'user' => new UserResource($user),
                'access_token' =>  $token,
            ]);
           
        }

    }   

}
