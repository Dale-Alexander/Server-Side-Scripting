<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function show($id)
    {
        return view('contacts.show', ['id' => $id]);
    }

    public function edit($id)
    {
        // The template uses the same form for adding and editing
        return view('contacts.create', ['id' => $id]);
    }
}
