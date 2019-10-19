<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function individual($id)
    {
        $video = Video::find($id);
        $parametros = [
            'video' => $video
        ];

        return view ('video',$parametros);
    }
}
