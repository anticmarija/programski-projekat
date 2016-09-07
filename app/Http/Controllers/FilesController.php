<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Storage;

class FilesController extends Controller
{
    public function upload() {
        
      return view('pages.upload');
        
    }

    public function handleUpload(Request $request) {


        if ($request->hasFile('file')) {

            $file= $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;

            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

           /*if ($uploaded) {

           dodati validaciju

           }*/

            return view('pages.uploadHandle');
        }
        return redirect()->to('/upload');
    }
}
