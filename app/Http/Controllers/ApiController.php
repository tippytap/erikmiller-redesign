<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

class ApiController extends Controller
{
    /**
     * Returns an array of images from the project or post's directory
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getImage(Request $request){
        $dir = Storage::disk('public')->files('images');
        $images = [];
        $fullUrl = $request->fullUrl();
        $explodedUrl = explode("erikmiller-redesign", $fullUrl);
        $baseUrl = $explodedUrl[0] . substr($request->getBasePath(), 1);
        foreach($dir as $file){
            $explodedFile = explode('.', $file);
            if($explodedFile[1] !== "DS_Store"){
                $filePath = Storage::url($file);
                $images[] = [
                    'title' => $explodedFile[0],
                    'value' =>"$baseUrl$filePath"
                ];
            }
        }
        return response()->json(['images' => $images]);
    }
}
