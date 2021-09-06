<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        // if ($request->file('file')) {
        //     $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
        //     $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        //     $input['file_url'] = '/storage/' . $filePath;
        // }

        // AWS 
        if ($request->file('file')) {
            $fileName = $request->file('file')->getClientOriginalName();
            $file = $request->file('file')->storeAs('/public/videos/Soul-Reflection/MUDRAS-WHITE-BACKGROUND', "$fileName", 's3');
            $input['file_url'] = Storage::disk('s3')->url($file);
        }

        // https://soulloopapp.s3.us-east-2.amazonaws.com/public/videos/Soul-Reflection/

        $status = FileUpload::create($input);

        if ($status) {
            return redirect('/')->with('success', 'File uploaded Successfully');
        } else {
            return $this->sendError('File uploading Failed');
        }
    }
}
