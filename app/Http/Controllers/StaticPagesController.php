<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp;
use App\Ware;


class StaticPagesController extends Controller
{
    public function home(Request $request)
    {
        $wares = Ware::all();

        return view('pages.showwares', compact('wares'));
    }


}
