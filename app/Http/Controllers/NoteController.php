<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Infrastructure\NoteEloquent;

class NoteController extends Controller
{
    private $noteEloquent;

    public function __construct(NoteEloquent $noteEloquent)
    {
        $this->noteEloquent = $noteEloquent;
    }

    public function index()
    {
        $data = $this->noteEloquent->getAllNotes();
        return view('welcome', ['notes' => $data]);
    }
}
