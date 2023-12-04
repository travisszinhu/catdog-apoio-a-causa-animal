<?php
use App\Models\Pet;
use App\Models\Suporte;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/duvidas', function () {
    return view('duvidas');
})->name('duvidas');

Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/catalogo', function () {
        $caes = App\Models\Pet::where('raca',0)->get();
        $gatos = App\Models\Pet::where('raca',1)->get();
        return view('catalogo', compact('caes', 'gatos'));
    })->name('catalogo');

    Route::get('/formularios', function () {
        return view('formularios');
    })->name('formularios');

    Route::get('/adocao/formulario', function () {
        return view('adocao.formulario');
    })->name('adocao.formulario');

    Route::post('/adocao/adotar', function (Request $request) {
       $pet = new Pet();
       $pet->nome = $request->nome;
       $pet->telefone = $request->telefone;
       $pet->descricao = $request->descricao;
       $pet->raca = $request->raca;
       $pet->foto = $request->file('foto')->store('pets', 'public');
       $pet->save();

        return redirect()->route('catalogo');
    })->name('adocao.store');

});
Route::post('/suporte/enviar', function (Request $request){
    $suporte = new Suporte();
    $suporte->nome = $request->nome;
    $suporte->email = $request->email;
    $suporte->descricao = $request->descricao;
    $suporte->tipo_de_assunto = $request->tipo_de_assunto;
    $suporte->save();
    return redirect()->route('catalogo');
})->name('suporte.store');