<?php

namespace App\Http\Infrastructure;

use App\Models\Note;

class NoteEloquent
{
    public function getAllNotes()
    {
        return Note::all();
    }
}
