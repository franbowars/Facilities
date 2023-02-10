<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facilities;

class FacilityController extends Controller
{
    public function add()
    {
        return view('admin.facility.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Facilities::$rules);
        
        $facility = new Facilities;
        $form = $request->all();
        
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $facility->image_path = basename($path);
        } else {
            $facility->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $facility->fill($form);
        $facility->save();
        
        return redirect('admin/facility/create');
    }
}
