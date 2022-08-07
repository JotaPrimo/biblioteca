<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::orderBy('nome', 'asc')->paginate(15);
        return view('admin.autores.index', compact('autores'));
    }

    public function create()
    {        
        return view('admin.autores.create');
    }

    public function store()
    {        
        return view('admin.autores.create');
    }


}
