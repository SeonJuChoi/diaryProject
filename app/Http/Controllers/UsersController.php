<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public $user_id;
    public $user_pw;
    public $user_email;
    public $nickname;

    public function showLogin() {
        if(auth()->check())
            return redirect('/');
        // show the form
        else
            return View('user.login');
    }

    public function doLogin(Request $request) {

            // <-- User Login 정보 가져오기
            $userData = array(
                'user_id'     => $request->get('user_id'),
                'password'    => $request->get('user_pw')
            );

            $this->user_id = $request->get('user_id');

            // <-- Login 정보 확인
            if (! auth()->attempt($userData, true)) {
                return response()->json([
                    'login' => false,
                    'msg'   => $this->user_id,
                ]);
            }
            else {
                return response()->json([
                    'login' => true,
                ]);
            }

    }

    public function doLogout(Request $request) {

        $request->session()->flush();

        auth()->logout();

        return '또봐요~~';
    }

    public function register(Request $request) {
        $this->user_id = $request->get('');
    }
}
