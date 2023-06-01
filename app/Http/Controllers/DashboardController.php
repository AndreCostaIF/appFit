<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){

        $data['image'] = 'assets/status.svg';

        return view('dashboard', $data);

    }
}
