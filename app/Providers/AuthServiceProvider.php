<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Gate;
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
        //
        // VerifyEmail::toMailUsing(function($notifiable, $url){
        //     return(new MailMessage)
        //     ->subject('verificar cuenta')
        //     ->Line('ya casi solo presiona el boton de confirmacion mque esta más abajo ')
        //     ->action('confirmar cuenta', $url)
        //     ->line('si no creaste esta cuenta, ignora este mensaje');
        // });
    }
}
