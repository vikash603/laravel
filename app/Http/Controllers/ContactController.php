<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact=Contact::get();
    return view('frontend.contact.index', compact('contact'));
}

public function create (){
    return view('frontend.contact.create');
}

public function store(Request $request){
    $data=array(
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
    );
    Contact::insert($data);
    return redirect('/contact');
}

public function edit($id){
    $contact=Contact::where('id', '=', $id)->get();
    return view('frontend.contact.edit', compact('contact'));

}

public function update(Request $request){
    $data=array(
        'name' =>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,

    );
    Contact::where('id', '=', $request->id)->update($data);
    return redirect('/contact');

}

public function delete($id){
    Contact::where('id','=', $id)->delete();
    return redirect('/contact');
}


}
