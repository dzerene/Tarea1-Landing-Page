<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Upload;

class FileController extends Controller
{
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required:max:255',
        'overview' => 'required',
      ]);

      auth()->user()->files()->create([
        'title' => $request->get('title'),
        'overview' => $request->get('overview'),
      ]);

      return back()->with('message', 'Tu archivo se ha subido exitosamente');
    }

    public function upload(Request $request)
    {
      $uploadedFile = $request->file('file');
      $filename = time().$uploadedFile->getClientOriginalName();
      Storage::disk('local')->putFileAs(
        'files/'.$filename,
        $uploadedFile,
        $filename
      );
      $upload = new Upload;
      $upload->filename = $filename;
      $upload->user()->associate(auth()->user());
      $upload->save();
      return response()->json([
        'id' => $upload->id
      ]);
    }

    public function index(){
      //$documentos  = \DB::table('files')->select('title','overview')->get();
      $documentos = File::all();
      return view('home', compact('documentos'));
    }
}
