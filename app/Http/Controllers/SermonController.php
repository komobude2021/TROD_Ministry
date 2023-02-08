<?php

namespace App\Http\Controllers;

use App\Helper\UserHelper;
use Illuminate\Support\Facades\DB;

class SermonController extends Controller
{
    protected $userHelper;

    public function __construct(UserHelper $userHelper)
    {
        $this->userHelper = $userHelper;
    }

    public function sermon () {
        $sermons = $this->userHelper->getSermonPaginate();
        return view('sermon', compact('sermons'));
    }

    public function sermonview($slug, $id){
        $sermon = $this->userHelper->getSermon($slug, $id);
        abort_if(count($sermon) <= 0, 404);
        return view('viewsermon', compact('sermon'));
    }
}
