<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::all();
        return view('home', compact('note'));
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $note = Note::create($request->except('_token'));

        return redirect('home');
    }

    public function edit($id)
    {
        $note = Note::find($id);
        $note->all();
        
        return view('update/edit', compact('note'));
    }

    public function update($id, Request $request)
    {
        $note = Note::find($id);
        $note->update($request->all());
        
        return redirect('home');
    }

    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();
        
        return redirect('home');
    }
}
