<?php

namespace App\Http\Controllers;

use App\Models\Utillog;
use App\Models\Visitor;
use DateTime;

class IndexController extends Controller
{
    public function index()
    {
        $ip = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
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
        return view('page.index', ['name' => 'Edy']);
    }
}
