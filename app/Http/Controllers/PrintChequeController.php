<?php

namespace App\Http\Controllers;

use App\Models\PrintCheque;
use Illuminate\Http\Request;

class PrintChequeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $no = PrintCheque::all();
        return view('PrintCheque.index')
        ->with('mo',$no);
    }

       public function create()
    {
        //
        return view('PrintCheque.create');
    }

        public function store(Request $request)
    {
        //
        $vaildet = $request->validate([
            'printid' => 'required',
            'chequeno' => 'required',
            'amount' => 'required',
            'chequedata' => 'required',
            'tochequedata' => 'required',
            'issuedata' => 'required',
            'toissuedata' => 'required',
            'desing' => 'required',
            'payto' => 'required',
            'printstatus' => 'required',
            'printdateform' => 'required',
            'toprintdateform' => 'required',
            'company' => 'required'
        ]);
        PrintCheque::create($vaildet);
        return redirect()->route('PrintCheque.index');
    }

   
    public function show(PrintCheque $printCheque)
    {
        //
    }

    public function edit(PrintCheque $printCheque)
    {
        //
        return view('PrintCheque.edit');
    }

   
    public function update(Request $request, PrintCheque $printCheque)
    {
        //
        $vaildet = $request->validate([
            'printid' => 'required',
            'chequeno' => 'required',
            'amount' => 'required',
            'chequedata' => 'required',
            'tochequedata' => 'required',
            'issuedata' => 'required',
            'toissuedata' => 'required',
            'desing' => 'required',
            'payto' => 'required',
            'printstatus' => 'required',
            'printdateform' => 'required',
            'toprintdateform' => 'required',
            'company' => 'required'
        ]);
        $printCheque->update($vaildet);
        return redirect()->route('PrintCheque.index');
    }

    
    public function destroy(PrintCheque $printCheque)
    {
        //
        $printCheque->delete();
        return redirect()->route('PrintCheque.index');
    }
}
