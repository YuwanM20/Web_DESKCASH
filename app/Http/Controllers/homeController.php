<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this ->project = new project;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lari = [
            'lari' => $this->project->tampil(),
        ];
        return view('frontend.project', $lari);
    }
}
