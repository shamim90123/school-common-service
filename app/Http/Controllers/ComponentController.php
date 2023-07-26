<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function getComponents()
    {
        $components = \App\Models\Component::all();
        return response()->json($components);
    }
}
