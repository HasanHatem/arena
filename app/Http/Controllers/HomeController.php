<?php

namespace App\Http\Controllers;

use App\Models\Content;

class HomeController extends Controller
{
    public function index()
    {
        $contentRecords = Content::where('page', 'landing-page')->get();
        $content = [];

        foreach ($contentRecords as $row) {
            $content[$row->identifier] = $row->content;
        }

        return view('home', compact('content'));
    }
}
