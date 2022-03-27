<?php

namespace App\Http\Controllers;

use App\Models\TemporaryGif1;
use App\Models\TemporaryGif2;
use App\Models\TemporaryGif3;
use App\Models\TemporaryLogo;
use App\Models\TemporaryThumbnail;
use App\Models\TemporaryVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('video')){
            $file = $request->file('video');
            $filename = uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/video/',$filename);

            TemporaryVideo::create([
                'filename' => $filename
            ]);

            return $filename;

        } elseif ($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $filename = uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/thumbnail/',$filename);

            TemporaryThumbnail::create([
                'filename' => $filename
            ]);

            return $filename;
            
        } elseif($request->hasFile('gif1')){
            $file = $request->file('gif1');
            $filename = uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/gif/',$filename);

            TemporaryGif1::create([
                'filename' => $filename
            ]);

            return $filename;
 
        } elseif($request->hasFile('gif2')){
            $file = $request->file('gif2');
            $filename = uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/gif/',$filename);

            TemporaryGif2::create([
                'filename' => $filename
            ]);

            return $filename;

        } elseif($request->hasFile('gif3')){
            $file = $request->file('gif3');
            $filename = uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/gif/',$filename);

            TemporaryGif3::create([
                'filename' => $filename
            ]);

            return $filename;

        } elseif($request->hasFile('page_logo')){
            $file = $request->file('page_logo');
            $filename = uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/logo/',$filename);

            TemporaryLogo::create([
                'filename' => $filename
            ]);

            return $filename;

        } else{
            return '';
        }

    }
}
