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

    $oVisitor = Visitor::find($_SERVER['REMOTE_ADDR']);
    if ($oVisitor == null) {
        $oVisitor = new Visitor;
        $oVisitor->IP = $_SERVER['REMOTE_ADDR'];

        $oUtillog = Utillog::find(1);
        $oUtillog->JumlahPengunjung = ($oUtillog->JumlahPengunjung) + 1;
        $oUtillog->save();
    }
    $oVisitor->Tanggal = date('Y-m-d');
    $oVisitor->save();

    return view('page/index');
});
