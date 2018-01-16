<?php

namespace Jffalcom\Clientes;

use Illuminate\Support\ServiceProvider;

class ClientesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__."/views", "tags");
        $this->publishes([
            __DIR__."/views" => base_path("resources/views/Jffalcom/Clientes"),
        ]);
        $this->publishes([
            __DIR__."/assets//js" => base_path("public/assets/js/Jffalcom/Clientes"),
        ]);
        $this->publishes([
            __DIR__."/assets//css" => base_path("public/assets/css/Jffalcom/Clientes"),
        ]);
        $this->publishes([
            __DIR__."/migrations" => database_path("migrations/"),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__."/routes.php";
        $this->app->make("Jffalcom\Clientes\Controllers\ClienteController");
    }
}
