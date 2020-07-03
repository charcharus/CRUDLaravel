<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pertanyaan;
use App\Jawaban;
use DB;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $pertanyaan = new Pertanyaan();
        // $pertanyaan->id = $request->id;
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->save();

    	return redirect()->route('pertanyaan.index');
    
    }

    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();

        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function edit($id)
    {
    	$pertanyaan = Pertanyaan::find($id);

    	return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update(Request $request, $id)
    {
    	$pertanyaan = Pertanyaan::find($id);

    	$pertanyaan->update($request->all());

    	return redirect('/pertanyaan');
    }

    public function delete($id)
    {
    	$pertanyaan = Pertanyaan::find($id);

    	$pertanyaan->delete();
    	
    	return redirect('/pertanyaan')->with('delete', 'Delete data sukses!');
    }
}
