<?php

namespace App\Http\Controllers;

use App\Models\ContractListReport;
use Illuminate\Http\Request;

class ContractListReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $no = ContractListReport::all();
        return view('ContractListReport.index')
        ->with('ho',$no);
    }

    
    public function create()
    {
        //
        return view('ContractListReport.create');
    }

    
    public function store(Request $request)
    {
        //
        $vaildet = $request->validate([
            'contractno' => 'required',
            'tenantbuyer' => 'required',
            'salesperson' => 'required',
            'startdateform' => 'required',
            'tostartdateform' => 'required',
            'enddateform' => 'required',
            'toenddateform' => 'required',
            'property' => 'required',
            'buildingname' => 'required',
            'agentbroker' => 'required',
            'contractstatus' => 'required',
            'contracttype' => 'required'
        ]);
        ContractListReport::create($vaildet);
        return redirect()->route('ContractListReport.index');
    }

  
    public function show(ContractListReport $contractListReport)
    {
        //
    }

    
    public function edit(ContractListReport $contractListReport)
    {
        //
        return view('ContractListReport.edit');
    }

   
    public function update(Request $request, ContractListReport $contractListReport)
    {
        //
        $vaildet = $request->validate([
            'contractno' => 'required',
            'tenantbuyer' => 'required',
            'salesperson' => 'required',
            'startdateform' => 'required',
            'tostartdateform' => 'required',
            'enddateform' => 'required',
            'toenddateform' => 'required',
            'property' => 'required',
            'buildingname' => 'required',
            'agentbroker' => 'required',
            'contractstatus' => 'required',
            'contracttype' => 'required'
        ]);
        $contractListReport->update($vaildet);
        return redirect()->route('ContractListReport.index');
    }

    public function destroy(ContractListReport $contractListReport)
    {
        //
        $contractListReport->delete();
        return redirect()->route('ContractListReport.index');
    }
}
