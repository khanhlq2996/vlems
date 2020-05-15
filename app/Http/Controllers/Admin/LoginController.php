<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (!Auth()->check()) {
            return view('admin.auth.login');
        }
        return redirect()->route('dashboard.index');
    }

    public function getRegister($type) {
        $type = $type == config('constants.TYPE_ACCOUNT.COMPANY') ? Config::get('constants.TYPE_ACCOUNT.COMPANY') : config('constants.TYPE_ACCOUNT.AGENCY');
        return view('admin.auth.register', compact('type'));
    }

    public function postLogin(Request $request)
    {
        $validator = Validator()->make($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|string',
            'remember' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->route('form.login')
                ->withErrors($validator);
        }

        if (Auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->has('remember'))) {
            $user = Auth()->user();
            $success['token'] = $user->createToken('vlems')->accessToken;
            $success['name'] = $user->name;

            return redirect()->intended(url()->current());
        }
        return redirect()->route('form.login')->withErrors(['Failed' => 'Email or password is incorrect']);
    }

    public function logout()
    {
        if (Auth()->user()) {
            Auth()->logout();
            return redirect()->route('form.login');
        }

        return redirect()->route('dashboard.index');
    }
}
