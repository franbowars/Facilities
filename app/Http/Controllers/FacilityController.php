<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilities;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $posts = Facilities::all()->sortByDesc('updated_at');
        
         if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        $search_word = $request->search_word;
        if ($search_word != '') {

            $posts = Facilities::where('content',$search_word)->get();
        } else {

            $posts = Facilities::all();
        }


        return view('toppage.index', ['headline' => $headline, 'posts' => $posts]);
    }
    
    public function show($id){
        // dump($id);
        $facility = Facilities::findOrfail($id);
        // dd($facility);
        return view('toppage.facility',['facility' =>$facility]);
    }
}
