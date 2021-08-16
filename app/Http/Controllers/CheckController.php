<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index() {
        $checks = Check::all();

        return response()->json($checks, 200);
    }
}
