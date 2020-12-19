<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\StoreContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('dashboard.contact_us.index' ,compact('contacts'));
    }

    public function create()
    {
        return view('dashboard.contact_us.create');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->route('admin.contacts.index');
    }
}
