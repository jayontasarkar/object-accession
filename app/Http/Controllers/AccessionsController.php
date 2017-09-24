<?php

namespace App\Http\Controllers;

use App\Accession;
use Illuminate\Http\Request;

class AccessionsController extends Controller
{
    public function index()
    {
        $accessions = Accession::with('classification')->latest()->get();

        return view('accessions.index', compact('accessions'));
    }

    public function create()
    {
        return view('accessions.create');
    }

    public function store(Request $request)
    {
        $request['accession_date'] = $request->input('collection_date');
        $accession = Accession::create($request->all());

        return redirect()->route('accessions.show', [$accession])
            ->withSuccess('নতুন নিদর্শন সেভ করা হয়েছে |');
    }

    public function show(Accession $accession)
    {
        return view('accessions.show', compact('accessions'));
    }
}
