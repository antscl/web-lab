<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function index()
    {
        
        $entities = Entity::orderBy('name', 'asc')->paginate(10);

        
        return view('entities.index', compact('entities'));
    }
}
