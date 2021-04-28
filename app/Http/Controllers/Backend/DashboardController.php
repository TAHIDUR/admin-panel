<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.index');
    }

    public function general()
    {
        return view('backend.componenets.general');
    }

    public function buttons()
    {
        return view('backend.componenets.buttons');
    }

    public function main()
    {
        return view('backend.componenets.main-component');
    }

    public function toastr()
    {
        return view('backend.componenets.toastr');
    }

    public function ion()
    {
        return view('backend.icons.ion');
    }

    public function fontawesome()
    {
        return view('backend.icons.fontawesome');
    }

    public function flag()
    {
        return view('backend.icons.flag');
    }

    public function table()
    {
        return view('backend.dashboard.table');
    }

    public function chartjs()
    {
        return view('backend.dashboard.chartjs');
    }

    public function simple()
    {
        return view('backend.dashboard.simple');
    }
}
