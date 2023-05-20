<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarringSeriesController extends Controller
{
    public function index($starring_id)
    {
        $series = Series::get()->where('starring_id',$starring_id);
        if(is_null($series)) return response()->json('Data not found',404);
        return response()->json($series);
    }
}
