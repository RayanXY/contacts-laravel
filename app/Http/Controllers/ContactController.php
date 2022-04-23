<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {
    public function index() {
        return view('contacts.index', [
            'contacts' => Contact::all()
        ]);
    }

    public function create() {
        return view('contacts.create');
    }

    public function show($id) {

    }

    public function edit($id) {
        return view('contacts.edit', [
            'contact' => Contact::find($id)
        ]);
    }

    /**
     * Store a new contact.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:contacts,email',
            'contact' => 'required|min:9|max:9|unique:contacts,contact'
        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact' => $request->get('contact'),
        ]);

        $contact->save();

        return redirect('/')->with('success', 'Contact successfully created!');
    }

    /**
     * Store a new contact.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param integer $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:contacts,email,'.$id,
            'contact' => 'required|min:9|max:9|unique:contacts,contact,'.$id
        ]);

        $contact = Contact::find($id);

        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->contact = $request->get('contact');

        $contact->save();

        return redirect('/')->with('success', 'Contact successfully updated!');
    }

    /**
     * Delete a existing contact
     * 
     * @param integer $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/')->with('success', 'Contact successfully deleted!');
    }
}
