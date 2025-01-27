<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->role === 'Administrator';
        });

        Gate::define('operational-manager', function (User $user) {
            return $user->role === 'Operasional Manager';
        });

        Gate::define('sales-manager', function (User $user) {
            return $user->role === 'Sales Manager';
        });

        Gate::define('service-operator', function (User $user) {
            return $user->role === 'Service Operator';
        });

        Gate::define('service-supervisor', function (User $user) {
            return $user->role === 'Service Supervisor';
        });
    }
}
