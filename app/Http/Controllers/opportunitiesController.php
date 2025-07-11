<?php
namespace App\Http\Controllers;

class opportunitiesController extends Controller
{
    public function index()
    {
        return view('public.opportunities.index');  // Also make sure this view exists
    }
}
