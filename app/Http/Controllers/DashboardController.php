<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apiary;
use App\Hive;
use App\Queen;
use App\Colony;
use App\Inspection;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //


      $apiaries = Apiary::orderBy('created_at', 'desc')->limit(5)->get();
      $hives = Hive::orderBy('created_at', 'desc')->limit(5)->get();
      $queens = Queen::orderBy('created_at', 'desc')->limit(5)->get();
      $colonies = Colony::orderBy('created_at', 'desc')->limit(5)->get();
      $inspections = Inspection::orderBy('created_at', 'desc')->limit(5)->get();
      return view('dashboard')->withApiaries($apiaries)->withHives($hives)->withQueens($queens)->withColonies($colonies)->withInspections($inspections);
    }
}
