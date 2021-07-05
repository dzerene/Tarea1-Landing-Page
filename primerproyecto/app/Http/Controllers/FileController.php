<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Upload;
use DB;
class FileController extends Controller
{
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required:max:255',
        'overview' => 'required',
      ]);
      $this->validate($request,['file'=>'required|file|mimes:png,jpg,pdf,docx|max:20000']);
      auth()->user()->files()->create([
        'title' => $request->get('title'),
        'overview' => $request->get('overview'),
      ]);

      return back()->with('message', 'Tu archivo se ha subido exitosamente');
    }
    public function Confirm(Request $request)
    {
        $id = $request->input('v');
        $status=$request->input('estado');
    
        DB::table('uploads')
                ->where('id',$id)
                ->update(['estado'=>$status]);
      return back()->with('message', 'Tu archivo se ha subido exitosamente');   
    
    }
    public function upload(Request $request)
    {
      $uploadedFile = $request->file('file');
      $filename =$uploadedFile->getClientOriginalName();
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
      $documentos  = DB::table('uploads')->select('*')->get();
      return view('home',['users'=>$documentos]);
    }

    public function ver(){
          $files=Upload::orderby('id')->paginate(30);
          return view('archivo.ver',['files'=>$files]);
  
    }
    public function show(Request $request,$file) {
      $uploadedFile = $request->file('file');
      $file_path =storage_path('app\files\\'.$file.'\\'.$file,
      $uploadedFile,
      $file
    );
      return response()->download($file_path);
    }
  
    public function delete($id){
      $del=Upload::find($id);
      Storage::delete($del->path);
      $del->delete();
      return redirect('/ver');
    }
}
