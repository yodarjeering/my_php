<?php
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\View\Composers\HelloComposer;
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

// controllerの場所をroute内に示すか, use文で場所を示したのち, リストでクラスと関数を示すことで表示可能
Route::get('hello', [HelloController::class, 'index']);
// Route::get('hello','App\Http\Controllers\HelloController@index');

// '{hoge}' <- ＄いらない！
Route::get('hi/{msg}', function ($msg) {
    $html = '<html><head>';
    $body = '</head><body>';
    $end = '</body></html>';
    // ヘッダとか繋げられる！　便利！
    return $html.'<title>'.$msg.'</title>'.$body.$end;
});

Route::post('hello',[HelloController::class, 'post']);


Route::get('/', function () {
    return view('welcome');
});