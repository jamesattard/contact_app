<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        if (request('company_id') == null) {
            $contacts = Contact::all();
        } else {
            $contacts = Contact::where('company_id', request('company_id'))->get();
        }

        return view('contacts.index', compact('contacts', 'companies'));
    }

    function create() {
        $companies = Company::orderBy('name')->pluck('name', 'id')->prepend('All Companies', '');
        return view('contacts.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'company_id' => 'required|exists:companies,id'
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been added successfully');
    }


    function show($id) {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }
}
