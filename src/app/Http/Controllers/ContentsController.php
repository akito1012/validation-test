<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function index()
    {
        $contents = Content::all();

        return view('index', compact('contents'));
    }
}
