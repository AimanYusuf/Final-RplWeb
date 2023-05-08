<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.massage.index', [
            "title" => "Massage",
            "massages" => Massage::latest()->get()
        ]);
    }
}
