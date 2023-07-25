<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomestayController extends Controller {
    public function index() {
        return view('modules.pages.homestay', [
            'title' => 'Penginapan'
        ]);
    }
};
