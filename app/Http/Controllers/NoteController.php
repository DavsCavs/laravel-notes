<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){

        $allNotes=Note::all();
         return view('notes.index', ['allNotes' => $allNotes]);
    }

    public function create(){
        return view('notes.create');
    }
}
