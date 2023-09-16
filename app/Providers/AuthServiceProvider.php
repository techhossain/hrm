<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Gate;
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
    public function boot(): void
    {

        Gate::define('manage_all', function (User $user) {
            $user = auth()->user();
            // return 0 ==  count(Employee::where('user_id', $user->id)->get());
            if( $user->is_admin){
                return true;
            }else{
                if( 1 >= count(Employee::where('user_id', $user->id)->get())){
                    abort( redirect()->route('employee.dashboard') );
                }
                else{
                  return redirect()->route('login');  
                }
                // return false;
            }
        });
    }
}
