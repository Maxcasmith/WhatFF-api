<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    function getById(Page $page) {
        return $page;
    }

    function get() {
        return Page::where('active', true)->get();
    }

    function switch(Request $request) {
        $p = Page::find($request->page);
        $p->active = $request->active;
        $p->save();
        
        return $p;
    }
}
