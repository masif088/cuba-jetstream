<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;

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
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerLearningPath();
        //
    }

    public function registerLearningPath()
    {

        Gate::define('update-module', function ($user, $module) {
            if ($module->user_id == $user->id) {
                return true;
            }
            return true;
        });

//        Gate::define('update-module', function ($user, $module) {
//            if ($module->user_id == $user->id) {
//                return true;
//            }
//            return false;
//        });

    }
}
