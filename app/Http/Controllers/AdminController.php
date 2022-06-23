<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\news;
use App\Models\Contact;

class AdminController extends Controller
{
    public function newspage(){
        return view('home.admin.news-admin');
    }

    public function indexreport(){
        $contact = contact::paginate(10);
        return view('home.admin.components.reportmain',compact('contact'));
    }

    public function addnews(){
        
        return view('home.admin.components.tambahnews');
    }

    public function indexnews(){
        $news = news::get();
        return view('home.admin.components.hero',['news' => $news]);
    }

    public function postnews(Request $request) {
        $this->validate($request, [
            'title' => 'required',
			'pictures' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'description' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$pictures = $request->file('pictures');
 
		$nama_file = time()."_".$pictures->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$pictures->move($tujuan_upload,$nama_file);
 
		news::create([
            'title' => $request->title,
			'pictures' => $nama_file,
			'description' => $request->description,
		]);
 
		return redirect()->back();
    }

    public function postcontact(Request $request)
    {
       // dd($request->all()); 

       contact::create ([
           'name' => $request->name,
           'email' => $request->email,
           'subject' => $request->subject,
           'messages' => $request->messages,
       ]);

       if ($obj->save()) {

        Session::flash('success', 'Saved Successfully !!');

    } else {
      Session::flash('error', 'Some thing went wrong!!');
    }

       return redirect('home');  
    }
}
