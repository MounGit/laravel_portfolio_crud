<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Indexcontact;
use Illuminate\Http\Request;

class IndexContactController extends Controller
{
    public function index() {
        $dataContact = Indexcontact::all();
        return view('backoffice.pages.contact.contact
        ', compact('dataContact'));
    }
    public function edit(Indexcontact $id) {
        $dataContact = $id;
        return view('backoffice.pages.contact.contactEdit', compact('dataContact'));
    }
    public function update(Indexcontact $id, ContactRequest $request) {
        $request->validated();
        $dataContact = $id;
        $dataContact->location = $request->location;
        $dataContact->mail = $request->mail;
        $dataContact->number = $request->number;
        $dataContact->save();
        return redirect()->route('contactBack');
    }
}
