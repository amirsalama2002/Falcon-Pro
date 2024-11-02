<?php

namespace App\Http\Controllers;

use App\Models\IssuedChequeReport;
use Illuminate\Http\Request;

class IssuedChequeReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $no = IssuedChequeReport::all();
        return view('IssuedChequeReport.index')
        ->with('moo',$no);
    }

    
    public function create()
    {
        //
        return view('IssuedChequeReport.create');
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
            'toissuedata' => 'required',
            'desing' => 'required',
            'payto' => 'required',
            'printstatus' => 'required',
            'printdateform' => 'required',
            'toprintdateform' => 'required',
            'companty' => 'required'
        ]);
        IssuedChequeReport::create($vaildet);
        return redirect()->route('IssuedChequeReport.index');
    }

    
    public function show(IssuedChequeReport $issuedChequeReport)
    {
        //
    }

    
    public function edit(IssuedChequeReport $issuedChequeReport)
    {
        //
        return view('IssuedChequeReport.edit');
    }

   
    public function update(Request $request, IssuedChequeReport $issuedChequeReport)
    {
        //
        $vaildet = $request->validate([
            'printid' => 'required',
            'chequeno' => 'required',
            'amount' => 'required',
            'chequedate' => 'required',
            'tochequedate' => 'required',
            'issuedate' => 'required',
            'toissuedata' => 'required',
            'desing' => 'required',
            'payto' => 'required',
            'printstatus' => 'required',
            'printdateform' => 'required',
            'toprintdateform' => 'required',
            'companty' => 'required'
        ]);
        $issuedChequeReport->update($vaildet);
        return redirect()->route('IssuedChequeReport.index');
    }

   
    public function destroy(IssuedChequeReport $issuedChequeReport)
    {
        //
        $issuedChequeReport->delete();
        return redirect()->route('IssuedChequeReport.index');

    }
}
