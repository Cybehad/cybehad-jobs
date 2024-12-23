<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    public function __invoke(Tag $tag): View
    {
        return view('search', ['jobs'=>$tag->jobs]);
    }
}
