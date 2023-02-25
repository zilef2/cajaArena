laravel new  cerobox --jet
//COMPOSER
composer require power-components/livewire-powergrid
composer require wireui/wireui
php artisan laraveles:install-lang
composer require psr/simple-cache:^1.0 maatwebsite/excel

//detalles 
php artisan vendor:publish --tag=jetstream-views

//mark:models
Php artisan make:model Producto -mf

//middleware
php artisan make:middleware IsAdmin

//vistas
    php artisan make:livewire forms.components.select
        php artisan make:controller usersForSelect