<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $register = $request->all();
        Accounts::create($register);

        return redirect('/login');
    }

    public function login()
    {
        $accounts = Account::only(['name', 'email', 'password']);
    }
}
