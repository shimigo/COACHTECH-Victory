<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function find()
    { 
       $contacts = Contact::Paginate(10); 
      return view('search',  ['contacts' => $contacts]);
    }
    public function search(Request $request) {
      $keyword_id = $request->id;
      $keyword_fullname = $request->fullname;
      $keyword_gender = $request->gender;
      $keyword_from = $request->from; 
      $keyword_until = $request->until;
      $keyword_email = $request->email;
      
      if(!empty($keyword_fullname) && empty($keyword_from) && empty($keyword_until) && empty($keyword_email)) {
      $query = Contact::query();
      $contacts = $query->where('fullname','like', '%' .$keyword_fullname. '%')->get();
      $contacts = Contact::Paginate(10); 
      return view('/search')->with([
        'contacts' => $contacts,
      ]);
    }   
    elseif(empty($keyword_fullname) && ($keyword_gender == 0) && empty($keyword_from) && empty($keyword_until) && empty($keyword_email)){
      $query = Contact::query();
      $contacts = $query->where('gender', '>=', 1)->get();
      $contacts = Contact::Paginate(10); 
      return view('/search')->with([
              'contacts' => $contacts,
            ]);
    }
    elseif(empty($keyword_fullname) && ($keyword_gender == 1) && empty($keyword_from) && empty($keyword_until) && empty($keyword_email)){
      $query = Contact::query();
      $contacts = $query->where('gender','1')->get();
      $contacts = Contact::Paginate(10); 
      return view('/search')->with([
              'contacts' => $contacts,
            ]);
    }
    elseif(empty($keyword_fullname) && ($keyword_gender == 2) && empty($keyword_from) && empty($keyword_until) && empty($keyword_email)){
      $query = Contact::query();
      $contacts = $query->where('gender','2')->get();
      $contacts = Contact::Paginate(10); 
      return view('/search')->with([
              'contacts' => $contacts,
            ]);
    }
    elseif(empty($keyword_fullname) && !empty($keyword_from) && !empty($keyword_until) && empty($keyword_email)){
     $query = Contact::query();
      $contacts = $query->whereBetween('created_at', [$keyword_from, $keyword_until])->get();
      $contacts = Contact::Paginate(10); 
      return view('/search')->with([
        'contacts' => $contacts,
      ]); 
    }  
    elseif(empty($keyword_fullname) && empty($keyword_from) && empty($keyword_until) && !empty($keyword_email)){
      $query = Contact::query();
      $contacts = $query->where('email', $keyword_email)->get();
      $contacts = Contact::Paginate(10); 
      return view('/search')->with([
        'contacts' => $contacts,
      ]); 
    }  
    else {
      return view('/find')->with('contacts',$contacts);
    }  
  } 
   public function delete(Request $request, $id){  
      $contacts = Contact::find($request->id)->delete($id);
      $contacts = Contact::Paginate(10); 
       return redirect('/search');    
    }    
}
