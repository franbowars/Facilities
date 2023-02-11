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
        // dd("OK");
        // dd($request);
        $this->validate($request, Facilities::$rules);
        // dd("OK");
        $facility = new Facilities;
        $form = $request->all();
        // dd($form);
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $facility->image_path = basename($path);
        } else {
            $facility->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $facility->fill($form);
        // dd($facility);
        $facility->save();
        // dd("OK");
        
        return redirect('admin/facility/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Facilities::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Facilities::all();
        }
        return view('admin.facility.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function edit(Request $request)
    {
        $facilities = Facilities::find($request->id);
        if (empty($facilities)) {
            abort(404);
        }
        return view('admin.facility.edit', ['facility_form' => $facilities]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Facilities::$rules);
        // News Modelからデータを取得する
        $facilities = Facilities::find($request->id);
        // 送信されてきたフォームデータを格納する
        $facilities_form = $request->all();
        
        if ($request->remove == 'true') {
            $facilities_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $facilities_form['image_path'] = basename($path);
        } else {
            $facilities_form['image_path'] = $facilities->image_path;
        }

        unset($facilities_form['image']);
        unset($facilities_form['remove']);
        unset($facilities_form['_token']);        

        // 該当するデータを上書きして保存する
        $facilities->fill($facilities_form)->save();

        return redirect('admin/facility');
    }
}
