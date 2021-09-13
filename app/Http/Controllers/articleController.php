<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    public function article($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}
