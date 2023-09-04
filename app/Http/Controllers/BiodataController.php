<?php

namespace App\Http\Controllers;
use App\Models\calonpengurus;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show($id)
    {
        $data = calonpengurus::findOrFail($id); // Retrieve the data by the given ID

        return view('biodata.show', compact('data')); // Pass the data to the view
    }
}
