<?php

namespace App\Http\Controllers;

use App\Models\CommisionDatesReport;
use Illuminate\Http\Request;

class CommisionDatesReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $no = CommisionDatesReport::all();
        return view('CommisionDatesReport.index')->with('koo',$no);
    }


    public function create()
    {
        //
        return view('CommisionDatesReport.create');
        
    }


    public function store(Request $request)
    {
        //
        $validet = $request->validate([
            'dateform' => 'required',
            'todateform' => 'required',
            'salesperon' => 'required',
            'contracttype' => 'required',
            'broker' => 'required',
            'reporttype' => 'required',
        ]);
        CommisionDatesReport::create($validet);
        return redirect()->route('CommisionDatesReport.index');
    }


    public function show(CommisionDatesReport $commisionDatesReport)
    {
        //
    }


    public function edit(CommisionDatesReport $commisionDatesReport)
    {
        //
        return view('CommisionDatesReport.edit');
    }


    public function update(Request $request, CommisionDatesReport $commisionDatesReport)
    {
        //
        $validet = $request->validate([
            'dateform' => 'required',
            'todateform' => 'required',
            'salesperon' => 'required',
            'contracttype' => 'required',
            'broker' => 'required',
            'reporttype' => 'required',
        ]);
        $commisionDatesReport->update($validet);
        return redirect()->route('CommisionDatesReport.index');
    }


    public function destroy(CommisionDatesReport $commisionDatesReport)
    {
        //
        $commisionDatesReport->delete();
        return redirect()->route('CommisionDatesReport.index');
    }
}
