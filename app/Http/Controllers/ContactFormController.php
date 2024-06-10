<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Mockery\Matcher\Contains;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $messages = ContactForm::all();
        return view('admin.inbox.index', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactFormRequest $request)
    {
        //
        ContactForm::create($request->all());
        $success = true;
        return view('home.contact', compact('success'));
    }
}
