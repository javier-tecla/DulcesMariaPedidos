<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // VerifyEmail::toMailUsing(function($notifiable, $url) {
        //     return (new MailMessage)
        //         ->greeting('Hola!')
        //         ->subject('Verificar Cuenta')
        //         ->line('Tu Cuenta ya esta casi lista, solo debes presionar en el enlace a continuación.')
        //         ->action('Confirmar Cuenta', $url)
        //         ->line('Si no creaste esta cuenta, puedes ignorar este mensaje.')
        //         ->salutation('Saludos, Dulces Maria.');
        // });
    }
}
