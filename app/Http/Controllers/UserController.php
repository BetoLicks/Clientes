<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index',[
            'users' => DB::table(table: 'users')->orderBy(column: 'name')->paginate(perPage: '5')
        ]);
    }
}
