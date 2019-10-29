<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('bend.pages.posts');
    }

    public function create()
    {
        return view('bend.pages.post-create');
    }

    //
    public function store(Request $request)
    {
        dd($request);
    }

    public function show($id)
    {
        return $id;
    }

    public function edit($id)
    {
        return 'edit';
    }

    public function update(Request $request, $id)
    {
        dd($request);
    }

    public function destroy($id)
    {
        return $id;
    }
}
