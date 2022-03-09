<?php

use App\Models\Utillog;
use App\Models\Visitor;
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

    $ip = $_SERVER['HTTP_CLIENT_IP']
        ? $_SERVER['HTTP_CLIENT_IP']
        : ($_SERVER['HTTP_X_FORWARDED_FOR']
            ? $_SERVER['HTTP_X_FORWARDED_FOR']
            : $_SERVER['REMOTE_ADDR']);
    $oVisitor = Visitor::find($ip);
    if ($oVisitor == null) {
        $oVisitor = new Visitor;
        $oVisitor->IP = $ip;

        $oUtillog = Utillog::find(1);
        $oUtillog->JumlahPengunjung = ($oUtillog->JumlahPengunjung) + 1;
        $oUtillog->save();
    }
    $oVisitor->Header1 = '';
    $oVisitor->Header2 = '';
    $oVisitor->Tanggal = new DateTime();
    $oVisitor->save();

    return view('page/index');
});
