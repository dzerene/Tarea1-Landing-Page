<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\recivedocument;

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
});

Route::get('/subirarchivo', function () {
    return view('uploadfile');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('file/store', 'App\Http\Controllers\FileController@store')->name('file.store');
Route::post('upload', 'App\Http\Controllers\FileController@upload')->name('upload');
Route::get('documentos', 'App\Http\Controllers\FileController@index')->name('documentos');

Route::get('/rechazarcomen', function () {
    return view('rechazarcomen');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('post', PostController::class);
    Route::get('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post');
    //Route::post('/post/create', 'PostController@store')->name('store');
    Route::get('/post/notificationsx', 'PostController@notificationsx', 'notificationsx')->name('notificationsx');
    Route::get('/notification', function(){
        $id=Auth::id();
        User::all()
            ->except($id)
            ->each(function(User $user) {
                $user->notify(new recivedocument);
            });
        return view('uploadfile');
    });
    Route::get('markAsRead',function(){
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    })->name('markAsRead');
    Route::post('/mark-as-read', 'PostController@markNotification')->name('markNotification');
});
    