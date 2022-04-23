<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function index() {
        // return view('contacts.index');
        return view('contacts.index', [
            'contacts' => Contacts::all()
        ]);
    }
}
