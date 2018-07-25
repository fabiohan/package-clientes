# package-clientes
Adicionar Service Provider no config/app.php:
  Jffalcom\Clientes\ClientesServiceProvider::class
  
 Adicionar no composer.json da aplicação
 "psr-4": {
            "App\\": "app/",
            "Jffalcom\\Clientes\\": "packages/Jffalcom/Clientes/src"
        }
Publicar o pacote
  php artisan vendor:publish
