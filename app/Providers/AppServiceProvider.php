<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $repositories = [
            'User\UserRepositoryInterface' => 'User\UserRepository',
            'CustomerPhone\CustomerPhoneRepositoryInterface' => 'CustomerPhone\CustomerPhoneRepository',
            'Email\EmailRepositoryInterface' => 'Email\EmailRepository',
            'Bank\BankRepositoryInterface' => 'Bank\BankRepository',
            'PayPhone\PayPhoneRepositoryInterface' => 'PayPhone\PayPhoneRepository',
            'WithDraw\WithDrawRepositoryInterface' => 'WithDraw\WithDrawRepository',
        ];
        foreach ($repositories as $key=>$val){
            $this->app->bind("App\\Repositories\\$key", "App\\Repositories\\$val");
        }
    }
}
