<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
  
    public function index()
    {
        $todolists = Todolist::all();
        return view('home',compact('todolists'));
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);

        Todolist::create($data);
        return back();
    }

    public function destroy(Todolist $todolist)
    {
        $todolist ->delete();
        return back();
    }

    public function create()
    {
    }


    public function show(Todolist $todolist)
    {
    }

    
    public function edit(Todolist $todolist)
    {
    }

    
    public function update(Request $request, Todolist $todolist)
    {
    }

   
  
}