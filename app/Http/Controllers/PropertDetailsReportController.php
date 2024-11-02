<?php

namespace App\Http\Controllers;

use App\Models\PropertDetailsReport;
use Illuminate\Http\Request;

class PropertDetailsReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $no = PropertDetailsReport::all();
        return view(' PropertDetailsReport.index')
        ->with('mo',$no);
    }

    
    public function create()
    {
        //
        return view(' PropertDetailsReport.create');
    }

    
    public function store(Request $request)
    {
        //
        $vaildet = $request->validate([
            'buildingname' => 'required',
            'propeerty' => 'required',
            'type' => 'required',
            'model' => 'required',
            'category' => 'required',
            'priceform' => 'required',
            'topriceform' => 'required',
            'size' => 'required',
            'tosize' => 'required',
            'status' => 'required',
            'view' => 'required',
            'feature' => 'required'
        ]);
        PropertDetailsReport::create($vaildet);
        return redirect()->route('PropertyManaqement.index');
    }

    
    public function show(PropertDetailsReport $propertDetailsReport)
    {
        //
    }

    
    public function edit(PropertDetailsReport $propertDetailsReport)
    {
        //
        return view('PropertDetailsReport.edit');
    }

    
    public function update(Request $request, PropertDetailsReport $propertDetailsReport)
    {
        //
        $vaildet = $request->validate([
            'buildingname' => 'required',
            'propeerty' => 'required',
            'type' => 'required',
            'model' => 'required',
            'category' => 'required',
            'priceform' => 'required',
            'topriceform' => 'required',
            'size' => 'required',
            'tosize' => 'required',
            'status' => 'required',
            'view' => 'required',
            'feature' => 'required'
        ]);
        $propertDetailsReport->update($vaildet);
        return redirect()->route('PropertDetailsReport.index');
    }

    
    public function destroy(PropertDetailsReport $propertDetailsReport)
    {
        $propertDetailsReport->delete();
        return redirect()->route('PropertDetailsReport.index');
    }
}
