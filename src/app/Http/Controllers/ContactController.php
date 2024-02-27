<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('top');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1','tel2','tel3', 'address', 'building', 'select', 'detail']);

        return view('confirm',['contact' => $contact]);
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1','tel2','tel3', 'address', 'building', 'select', 'detail']);
        Contact::create($contact);
        if($request->input('back') == 'back'){
            return redirect('/')
            ->withInput();
        }
        return view('thanks');
    }
}
