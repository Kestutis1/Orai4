<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Trak' => 'App\Policies\TrakPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        // $gate->before(function ($user) {
        // Gate::before(function ($user) {
        //
        //   if ($user->id == 2) {
        //        return true;
        //    }
          // return $user->id == 2; //Tai administratoriaus id

        // });

    }
}
