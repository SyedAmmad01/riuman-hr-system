<?php

namespace App\Http\Controllers\User;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
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
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(Request $request){
        $data_array = array(
            'title'   => 'DashBoard',
        );
        $candidates = Candidate::count();
        return view('home' , compact('candidates'));

}

}
