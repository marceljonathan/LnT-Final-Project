<?php

namespace App\Http\Controllers;

use App\stuff;
use App\Http\Requests\StuffRequest;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function create(){
        return create('CRUD.create');
    }
}
