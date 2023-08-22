<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        $this->registerPolicies();
        Gate::define('admin', function (User $user) {
            return $user->role == '1';
        });
        Gate::define('pemilik', function (User $user) {
            return $user->role == '2';
        });
        Gate::define('karyawan', function (User $user) {
            return $user->role == '3';
        });
    }
}
