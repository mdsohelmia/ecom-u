<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loginForm(): View
    {
        return view('backend.auth.index');
    }

    public function loginProcess(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required'=>'email dite hobe',
            'email.email'=>'email validae email de'
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];;

        if ($this->myCustomAttempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back();

    }


    public function logout(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }

    public function myCustomAttempt(array $credentials)
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!Hash::check($credentials['password'], $user->password)) {
            return false;
        }
        auth()->attempt();
        auth()->login($user);
        return true;
    }
}
