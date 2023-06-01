<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AguaController extends Controller
{

    public function index(){

        $data['image'] = 'assets/agua.svg';
        $data['title'] = 'Água';
        return view('agua', $data);

    }
}
