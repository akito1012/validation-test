<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connect;
use App\Http\Requests\ConnectRequest;

use App\Http\Controller\ContentsController;

class ConnectsController extends Controller
{
    public function index(Request $request)
    {
        $connects = Connect::with('content')->get();
        $contents = Connect::all();

        return view('index', compact('connects', 'contents'));
    }

    public function confirm(ConnectRequest $request)
    {
        $connect = $request->only([ 'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);

        return view('confirm', compact('connect'));
    }

    public function store(ConnectRequest $request)
    {
        $connect = $request->only([ 'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        Connect::create($connect);

        return view('thanks');
    }
}
