<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function index() {
        $entries = Entry::all();
        // foreach ($entries as $entry) {
        //     var_dump($entry->title);
        // }
        return view('entries.index', ['entries' => $entries]);
    }

    public function show($id) {
        $entry = Entry::findOrFail($id);

        return view('entries.show', ['entry' => $entry]);
    }
}
