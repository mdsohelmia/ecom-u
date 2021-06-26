<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthValidationRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function loginForm(): View
    {
        return view('backend.auth.index');
    }

    public function loginProcess(AuthValidationRequest $request): RedirectResponse
    {
        $credentials = $request->validated();
        if (auth()->attempt($credentials)) {
            return redirect()->intended(route('dashboard'));
        }
        session()->flash('message', 'Invalid credentials');

        return redirect()->back()->withInput();
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
