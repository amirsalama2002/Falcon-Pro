<?php

namespace App\Http\Controllers;

use App\Models\ContactsName;
use Illuminate\Http\Request;

class ContactsNameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $nm = ContactsName::all();
        return view('ContactsName.index')
        ->with('mo',$nm);
    }

   
    public function create()
    {
        //
        return view('ContactsName.create');
    }

    
    public function store(Request $request)
    {
        //
        $vaildet = $request->validate([
            'contractno' => 'required',
            'tenantbuyer' => 'required',
            'salesperson' => 'required',
            'startdatefrom' => 'required',
            'tostartdatefrom' => 'required',
            'enddatefrom' => 'required',
            'toenddatefrom' => 'required',
            'property' => 'required',
            'buildingname' => 'required',
            'agentbroker' => 'required',
            'contractstatus' => 'required',
            'contracttype' => 'required'
        ]);
        ContactsName::create($vaildet);
        return redirect()->route('ContactsName.index');
    }

    
    public function show(ContactsName $contactsName)
    {
        //
    }

    
    public function edit(ContactsName $contactsName)
    {
        //
        return view('ContactsName.edit');
    }

    public function update(Request $request, ContactsName $contactsName)
    {
        //
        $vaildet = $request->validate([
            'contractno' => 'required',
            'tenantbuyer' => 'required',
            'salesperson' => 'required',
            'startdatefrom' => 'required',
            'tostartdatefrom' => 'required',
            'enddatefrom' => 'required',
            'toenddatefrom' => 'required',
            'property' => 'required',
            'buildingname' => 'required',
            'agentbroker' => 'required',
            'contractstatus' => 'required',
            'contracttype' => 'required'
        ]);
        $contactsName->update($vaildet);
        return redirect()->route('ContactsName.index');
    }

   
    public function destroy(ContactsName $contactsName)
    {
        //
        $contactsName->delete();
        return redirect()->route('ContactsName.index');
    }
}
