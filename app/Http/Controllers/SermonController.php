<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SermonController extends Controller
{
    public function sermon () {
        $sermons = DB::table('sermon')->where('deleted_at', null)->orderBy('created_at', 'desc')->paginate(24);
        return view('sermon', compact('sermons'));
    }

    public function sermonview($slug, $id){
        $sermon = DB::table('sermon')->where('id', $id)->where('deleted_at', null)->where('slug', $slug)->get();
        abort_if(count($sermon) <= 0, 404);
        return view('viewsermon', compact('sermon'));
    }
}
