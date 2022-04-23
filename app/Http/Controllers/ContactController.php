<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contacts.index', [
            'contacts' => Contact::all()
        ]);
    }

    public function create() {
        return view('contacts.create');
    }

    /**
     * Store a new contact.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|min:9|max:9'
        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact' => $request->get('contact'),
        ]);

        $contact->save();

        return redirect('/')->with('success', 'Contact successfully created!');
    }
}
