<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Facade;

class Helper extends Facade
{
    public static function getNameRole($role){
        $roleName="";
        switch ($role){
            case 0 :
                $roleName="Tim MBKM Pusat";
                break;
            case 1 :
                $roleName="Tim MBKM Kampus";
                break;
            case 2 :
                $roleName="Tim MBKM Fakultas";
                break;
            case 3 :
                $roleName="Tim Pengajar";
                break;
            case 4 :
                $roleName="Peserta MBKM";
                break;

        }
        return $roleName;

    }
}
