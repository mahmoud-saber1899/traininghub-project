<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $orgnizations = Organization::with('ratings')->get();
        return view('main', compact('orgnizations'));
    }
}
