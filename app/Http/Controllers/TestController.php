<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testmodel;

class TestController extends Controller
{
    public function show(){
       $record = testmodel::all();
       dd($record);
    }
}
