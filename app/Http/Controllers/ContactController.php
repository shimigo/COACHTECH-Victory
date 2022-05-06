<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact.index');
    }
    public function post(ClientRequest $request)
    {
        $inputs = $request->all();     
        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }
    public function confirm(Request $request)
    {
        return view('contact.confirm');
    }
    public function create(Request $request)
    {  
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Contact::create($form);
    
        return redirect('/contact/thanks');
    }
    public function send(Request $request)
    {
         return view('contact.thanks');
    }
    public function find()
    {
        return view('find', ['input' => '']);
    }
}
