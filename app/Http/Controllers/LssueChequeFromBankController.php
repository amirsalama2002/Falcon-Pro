<?php

namespace App\Http\Controllers;

use App\Models\lssueChequeFromBank;
use Illuminate\Http\Request;

class LssueChequeFromBankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $no =  lssueChequeFromBank::all();
        return view('lssueChequeFromBank.index')
        ->with('moo',$no);
    }

    
    public function create()
    {
        //
        return view('lssueChequeFromBank.create');
    }

    
    public function store(Request $request)
    {
        //
        $vaildet = $request->validate([
            'printid' => 'required',
            'chequeno' => 'required',
            'amount' => 'required',
            'chequedate' => 'required',
            'tochequedate' => 'required',
            'issuedate' => 'required',
            'toissuedate' => 'required',
            'desing' => 'required',
            'payto' => 'required',
            'printstatus' => 'required',
            'printdatefrom' => 'required',
            'toprintdatefrom' => 'required',
            'company' => 'required'
        ]);
        lssueChequeFromBank::create($vaildet);
        return redirect()->route('lssueChequeFromBank.index');
    }

     public function show(lssueChequeFromBank $lssueChequeFromBank)
    {
        //
    }

    
    public function edit(lssueChequeFromBank $lssueChequeFromBank)
    {
        //
        return redirect()->route('lssueChequeFromBank.edit');
    }

  
    public function update(Request $request, lssueChequeFromBank $lssueChequeFromBank)
    {
        //
        $vaildet = $request->validate([
            'printid' => 'required',
            'chequeno' => 'required',
            'amount' => 'required',
            'chequedate' => 'required',
            'tochequedate' => 'required',
            'issuedate' => 'required',
            'toissuedate' => 'required',
            'desing' => 'required',
            'payto' => 'required',
            'printstatus' => 'required',
            'printdatefrom' => 'required',
            'toprintdatefrom' => 'required',
            'company' => 'required'
        ]);
        $lssueChequeFromBank->update($vaildet);
        return redirect()->route('lssueChequeFromBank.index');
    }

    
    public function destroy(lssueChequeFromBank $lssueChequeFromBank)
    {
        //
        $lssueChequeFromBank->delete();
        return redirect()->route('lssueChequeFromBank.index');
    
    }
}
