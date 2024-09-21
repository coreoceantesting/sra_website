<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //


    public function aboutDrp()
    {
        return view('pagem.innerpage.department-history-marathi');
    }
}
