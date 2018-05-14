<?php

namespace App\Http\Controllers;
use App\File;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FileController extends Controller
{
    public function store(Request $request)
    {
    	$post_id = request('post_id');
    	if($request->hasFile('file')){
    		foreach($request->file as $file){
    		$filename = $file->getClientOriginalName();
       $filesize = $file->getClientSize();
       $file->storeAs('public/upload/'.$post_id, $filename);
       $fileModel = new File;
       $fileModel->post_id = request('post_id');
       $fileModel->name = $filename;
       $fileModel->size = $filesize;
       $fileModel->save();	

    	}
    		return back();
    	}
    	
    	/*if($request->hasFile('file')){
    		foreach($request->file as $file){

       $filename = $file->getClientOriginalName();
       $filesize = $file->getClientSize();
       $file->storeAs('public/upload', $filename);
       $fileModel = new File;
       $fileModel->post_id = request('post_id');
       $fileModel->name = $filename;
       $fileModel->size = $filesize;
       $fileModel->save();
      
        }
         return back();
      }*/
    	
    }
     public function destroy($id)
    {
      $file = File::find($id);
      Storage::delete('public/upload/'.$file->post_id.'/'.$file->name);
      $file->delete();
      return back();
  		
    }
}
