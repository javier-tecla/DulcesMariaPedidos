<?php

namespace App\Providers;

use App\Models\Pedido;
use App\Policies\PedidoPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Pedido::class => PedidoPolicy::class,
    ];


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
