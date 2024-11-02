<?php

namespace App\Http\Controllers;

use App\Models\ContractsEndDatesReport;
use Illuminate\Http\Request;

class ContractsEndDatesReportController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $no = ContractsEndDatesReport::all();
        return view('ContractsEndDatesReport.index')
        ->with('he',$no);
    }

   
    public function create()
    {
        //
        return view('ContractsEndDatesReport.create');
    }

    
    public function store(Request $request)
    {
        //
        $validet = $request->validate([
           'dateform' => 'required',
            'todateform' => 'required',
            'contracttype' => 'required',
        ]);
        ContractsEndDatesReport::create($validet);
        return redirect()->route('ContractsEndDatesReport.index');
    }

    
    public function show(ContractsEndDatesReport $contractsEndDatesReport)
    {
        //
    }

    
    public function edit(ContractsEndDatesReport $contractsEndDatesReport)
    {
        //
        return view('ContractsEndDatesReport.edit');
    }

    
    public function update(Request $request, ContractsEndDatesReport $contractsEndDatesReport)
    {
        //
        $validet = $request->validate([
            'dateform' => 'required',
             'todateform' => 'required',
             'contracttype' => 'required',
         ]);
         $contractsEndDatesReport->update($validet);
         return redirect()->route('ContractsEndDatesReport.index');
    }

    
    public function destroy(ContractsEndDatesReport $contractsEndDatesReport)
    {
        //
        $contractsEndDatesReport->delete();
        return redirect()->route('ContractsEndDatesReport.index');
    }
}
