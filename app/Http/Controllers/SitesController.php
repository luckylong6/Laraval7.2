<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function about() {
        $data = [];
        $data['name1'] = 'Pater';
        $data['name2'] = 'Tom';
        $data['name3'] = 'Jerr';
        return view('sites.about', $data);
    }
}
