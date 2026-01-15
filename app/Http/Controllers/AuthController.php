<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    protected $redirectTo = '/';
    public function __construct(protected UserService $userService) {}

    public function welcome()
    {
        return view('welcome');
    }

    public function showLoginPage()
    {
        if (Auth::check()) return redirect()->route('home');
        return view('auth.login');
    }

    public function redirectToGoogle()
    {
        if (Auth::check()) return redirect()->route('home');
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            // ✅ Simpan foto profil Google ke storage
            $photoPath = $this->userService->saveGoogleAvatar($googleUser->avatar, $googleUser->id);

            $user = User::create([
                'name'      => $googleUser->name,
                'email'     => $googleUser->email,
                'google_id' => $googleUser->id,
                'avatar'    => $photoPath,
                'password'  => bcrypt(Str::random(16)), // password acak
            ]);

            $user->assignRole('user'); // kasih role default
        }

        // login + remember
        Auth::login($user, true);

        return redirect()->route('home');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email'    => 'required|email',
            'password'    => 'required',
        ]);

        // Check if email exists in the database
        if (!User::where('email', $request->email)->exists()) {
            return back()->withErrors(['email' => 'Email does not exist.'])->withInput();
        }

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Attempt login
        if (Auth::attempt($data)) {
            $user = Auth::user();
            Session::put('user_id', $user->id);
            Session::put('name', $user->name);
            // Session::put('role', User::find($user->id)->roles);
            Session::put('email', User::find($user->id)->email);
            Session::put('avatar', User::find($user->id)->avatar);
            return redirect()->route('home');
        } else {
            // Authentication failed
            return back()->withErrors(['password' => 'Invalid password.'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
