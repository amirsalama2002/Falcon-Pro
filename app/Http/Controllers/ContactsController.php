<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $na = Contacts::all();
        return view('contacts.index')
        ->with(['name' => $na]);
    }


    public function create()
    {
        return view('contacts.create');
    }


    public function store(Request $request)
    {
        //
        $validet = $request->validate([
            'name' => 'required',
            'arabicname' => 'required',
            'email' => 'required',
            'model' => 'required',
            'view' => 'required',
            'box' => 'required',
            'officephone' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'feature' => 'required',
            'category' => 'required',
            'remarks' => 'required',
        ]);

        Contacts::create($validet);
        return redirect()->route('contacts.index');
    }


    public function show(Contacts $contacts)
    {
        //
    }


    public function edit(Contacts $contacts)
    {
        //
        return view('contacts.edit');
    }


    public function update(Request $request, Contacts $contacts)
    {
        //
        $validet = $request->validate([
            'name' => 'required',
            'arabicname' => 'required',
            'email' => 'required',
            'model' => 'required',
            'view' => 'required',
            'box' => 'required',
            'officephone' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'feature' => 'required',
            'category' => 'required',
            'remarks' => 'required',
        ]);

        $contacts->update($validet);
        return redirect()->route('contacts.index');
    }


    public function destroy(Contacts $contacts)
    {
        //
        $contacts->delete();
        return redirect()->route('contacts.index');
    }
}
