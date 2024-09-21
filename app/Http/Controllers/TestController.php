<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function rentmanagemntsystemmr(){
        return view('pagem/innerpage/rentmanagemntsystemmr');
    }

    public function transferoftenements(){
        return view('pagem/innerpage/transferoftenements');
    }

    public function contactusmarathi(){
        return view('pagem/innerpage/contactusmarathi');

    }

    public function contactdirectorymarathi(){
        return view('pagem/innerpage/contactdirectorymarathi');

    }

    public function righttoservicemarathi(){
        return view('pagem/innerpage/righttoservicemarathi');

    }


    public function enviornmentcellmarathi(){

        return view('pagem/innerpage/enviornmentcellmarathi');
    }


    public function eknath_shinde(){
        return view('ministerm/detail/eaknath_shinde');

    }
    public function devendra_fadanvis(){
        return view('ministerm/detail/devendra_fadanvis');

    }


    public function ajitpawar(){
        return view('ministerm/detail/ajitpawar');

    }

    public function atulsave(){
        return view('ministerm/detail/atulsave');

    }

    public function valsyasingha(){
        return view('ministerm/detail/valsyasingha');

    }


    public function mahendrakalyankar(){
        return view('ministerm/detail/mahendrakalyankar');

    }

    public function faq(){
        return view('components/admin/faq');

    }

    public function actandrulesmarathi(){
        return view('pagem/innerpage/actandrulesmarathi');
    }


    public function notificationactsmarathi(){
        return view('notification/actsmarathi');

    }

    public function gismisslumdatamarathi(){
        return view('pagem/innerpage/gis-mis-slum-data-marathi');

    }
}
