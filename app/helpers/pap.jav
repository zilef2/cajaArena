laravel new  cerobox --jet
//COMPOSER
composer require power-components/livewire-powergrid
composer require wireui/wireui //porqueria
php artisan laraveles:install-lang
composer require psr/simple-cache:^1.0 maatwebsite/excel
composer require filament/filament:"^2.0"

//detalles 
php artisan vendor:publish --tag=jetstream-views

//mark:models
Php artisan make:model Producto -mf

//middleware
php artisan make:middleware IsAdmin

//filament
    php artisan make:filament-user
        php artisan make:filament-page Settings


//powergrid
    composer require power-components/livewire-powergrid
    php artisan vendor:publish --tag=livewire-powergrid-config


//vistas
    php artisan make:livewire forms.components.select
        php artisan make:controller usersForSelect

