<?php

namespace App\Http\Controllers;

use App\Models\ChequeListReport;
use Illuminate\Http\Request;

class ChequeListReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       public function index()
    {
        //
        $no = ChequeListReport::all();
        return view('ChequeListReport.index')
        ->with('moo',$no);
    }

    
    public function create()
    {
        //
        return view('ChequeListReport.create');
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
        ChequeListReport::create($vaildet);
        return redirect()->route('ChequeListReport.index');
    }

    
    public function show(ChequeListReport $chequeListReport)
    {
        //
    }

    
    public function edit(ChequeListReport $chequeListReport)
    {
        //
        return view('ChequeListReport.edit');
    }

    
    public function update(Request $request, ChequeListReport $chequeListReport)
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
        $chequeListReport->update($vaildet);
        return redirect()->route('ChequeListReport.index');
    }

   
    public function destroy(ChequeListReport $chequeListReport)
    {
        //
        $chequeListReport->delete();
        return redirect()->route('ChequeListReport.index');
    }
}
