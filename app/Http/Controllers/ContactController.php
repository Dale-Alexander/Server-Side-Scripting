<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Company;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('company')->get();
        return view('contacts.index', compact('contacts'));
        /* 
        [
    'contacts' => $contact
        ]

        [
    'contacts' => Illuminate\Database\Eloquent\Collection [
        App\Models\Contact {
            "id" => 1,
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            // ...
        },
        App\Models\Contact {
            "id" => 2,
            "name" => "Jane Smith",
            "email" => "janesmith@example.com",
            // ...
        }
    ]
]




        */
    }

    public function create()
    {
        $companies = Company::all();

        // 3. Pass the $companies collection to your create view
        return view('contacts.create', compact('companies'));
    }

        public function store(Request $request)
    {
    Contact::create([
        'first_name' => $request->first_name,
        'last_name'  => $request->last_name,
        'email'      => $request->email,
        'phone'      => $request->phone,
        'address'    => $request->address,
        'company_id' => $request->company_id,
    ]);

    return redirect()->route('contacts.index')
                     ->with('success', 'Contact created successfully!');
    }
    

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
        /* 
            [
    'contact' => Contact {
        "id" => 5,
        "name" => "John Doe",
        "email" => "johndoe@example.com",
        "phone" => "+356 9912 3456",
        "message" => "Hello, I would like to get more information.",
        "created_at" => "2026-11-10 10:00:00",
        "updated_at" => "2026-11-10 10:00:00"
    }
    ]
        */
    }

    public function edit($id)
    {
        // The template uses the same form for adding and editing
        return view('contacts.create', ['id' => $id]);
    }

    public function delete($id){
        $contact = Contact::findOrFail($id);

        // 2. Delete it
        $contact->delete();
    return view('contacts.show', [
        'contact' => $contact, 
        'Success' => 'Deleted successfully!'
    ]);
    }
}
