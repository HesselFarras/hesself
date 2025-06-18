<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        //ambil data dari database
        $pengalamans = Pengalaman::all();

        //kirim data ke view
        return view('welcome',compact('pengalamans'));


    }

}
