<?php

use App\Http\Controllers\usersForSelect;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::apiResource('odosUser', usersForSelect::class)
      ->only(['index']);










// <Artisan commands desc="Artisan">
    Route::get('/exception',function(){
        throw new Exception('Probando excepciones y enrutamiento. La prueba ha concluido exitosamente.');
    });

    Route::get('/foo', function () {
        if (file_exists(public_path('storage'))){
            return 'Ya existe';
        }
        App('files')->link(
            storage_path('App/public'), public_path('storage')
        );return 'Listo';
    });

    Route::get('/clear-c', function () {
        echo Artisan::call('cache:clear');
        echo Artisan::call('route:clear');
        echo Artisan::call('route:cache');
        echo Artisan::call('config:clear');
        echo Artisan::call('config:cache');
        echo Artisan::call('view:clear');
        Artisan::call('optimize');
        Artisan::call('optimize:clear');
        return "Optimizacion finalizada";
        // throw new Exception('Optimizacion finalizada!');
    });

    Route::get('/tmantenimiento', function () {
        echo Artisan::call('down --secret="token-it"');
        return "Aplicación abajo: token-it";
    });
    Route::get('/Arriba', function () {
        echo Artisan::call('up');
        return "Aplicación funcionando";
    });

//</-fold>
