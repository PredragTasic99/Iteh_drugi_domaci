<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkijeCollection;
use App\Http\Resources\SkijeResource;
use App\Models\Skije;
use Illuminate\Http\Request;

class SkijeContoller extends Controller
{
    
    public function index()
    {
    $skije=Skije::all();
    return new SkijeCollection($skije);
    }

    public function show(Skije $skije)
    {
       return new SkijeResource($skije);
    }
}
