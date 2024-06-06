<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function index(){
        return view('auth.login');
    }
    public function verify(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password'=>$request->password])){
            return redirect()->intended('/admin');

        }else{
            return redirect(route('auth.index'))->with('pesan', 'Kombinasi email dan password salah');
        }
    }

    public function logout(){
        If(Auth::check()){
           Auth::logout();
        }
        return redirect(route('auth.index'));
    }
}
