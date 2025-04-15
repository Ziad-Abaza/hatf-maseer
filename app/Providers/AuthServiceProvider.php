<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        Fortify::registerView(function () {
            return view('auth.register');
        });
    
        Fortify::loginView(function () {
            return view('auth.login');
        });
    
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();
    
            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }
        });
    }
}
