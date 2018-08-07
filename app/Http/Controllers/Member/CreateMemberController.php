<?php

namespace App\Http\Controllers\Member;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateMemberController extends Controller
{
    public function create()
    {
        return view('member.create');
    }
    public function store(Request $request)
    {
        #@Member: TodoValidation
        $Member = new Member($request->all());
        auth()->user()->members()->save($Member);
        return redirect(url('/'));
    }
}
