<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branches\branches;
use App\Models\roomspa\roomspa;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
    
        $branches = branches::orderBy('id', 'asc')->paginate(4);
        $roomspa = roomspa::orderBy('maxpeeps', 'asc')->paginate(4);
        
        if ($request->ajax()) {
            return view('branches.partials.spa_list', ['roomspa' => $roomspa])->render();
        }
        
        return view('home', compact('branches', 'roomspa'));
    }
    

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }
    
//     public function contact()
//     {
//         return view('pages.contact');
//     }
    
 }
