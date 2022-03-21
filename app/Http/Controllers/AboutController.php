<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function about(){
        $about=About::get();

        return view('frontend.about', compact('about'));



    }

    public function create(){
        return view('frontend.create');
    }

    public function store(Request $request){
        $data=array(
            'name' =>$request->name,
            'email' =>$request->email,
            'about' =>$request->about,
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),
        );
About::insert($data);
return redirect('/about');

    }

    public function edit($id){
      $data=About::where('id', '=', $id)->get();
        return view('frontend.edit', compact('data'));
    }

public function update(Request $request){
    $data=array(
        'name' =>$request->name,
        'email' =>$request->email,
        'about' =>$request->about,
    );

    About::where('id', '=', $request->id)->update($data);
    return redirect('/about');
}

public function show($id){
    $abt=About::where('id', '=', $id)->get();
    return view('frontend.show', compact('abt'));

}

public function delete($id){
    About::where('id', '=', $id)->delete();
    return redirect('/about');

}



}
