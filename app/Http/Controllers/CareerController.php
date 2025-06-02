<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Broadcast;


class CareerController extends Controller
{


    public function index()
    {

        // return view('about');
    return view('career')->with('locale', app()->getLocale());

    }



}