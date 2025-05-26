<?php
namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('public.about.index');  // Also make sure this view exists
    }
}
