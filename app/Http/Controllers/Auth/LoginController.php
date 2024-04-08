<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function  index(){
        if(auth()->check())
        {
            return redirect()->route('agent.dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request){
        $validatedForm = $request->validate([
            "username" => "required|max:32",
            "password" => "required|max:32",
        ]);
        $userPass = $validatedForm['password'];
        try{
            $user = DB::table('vicidial_users')
            ->where("user",$validatedForm['username'])
            ->whereRaw("pass = BINARY ?",["$userPass"])
            ->first();
            if($user){
                $user_level = $user->user_level;
                if($user_level==6){
                    DB::table('vicidial_users')
                    ->where('user_id','=',"$user->user_id")
                    ->update(["custom_one" => session()->getId()]);
                    Auth::loginUsingId($user->user_id);
                    return redirect()->route('agent.dashboard');
                }
                else{
                    return redirect('/');
                }
            }
            else{
                return redirect()->back()->withInput()->withErrors(['error'=>'Inavlid Username or Password']);
            }
        }
        catch(\Exception $e)
        {
            ddd($e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error'=>'System Error']);
        }
    }

    public function logout(){
        Auth::logout();
        session()->flush();
        session()->regenerateToken();
        return redirect('/');
    }
}
