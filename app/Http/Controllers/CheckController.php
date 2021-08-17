<?php

namespace App\Http\Controllers;

use App\Http\Resources\CheckDetailsResource;
use App\Http\Resources\CheckIndexResource;
use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        $checks = Check::all();
        $response = [];

        foreach ($checks as $check) {
            array_push($response, new CheckIndexResource($check));
        }


        return response()->json($response, 200);
    }

    public function show(Check $check)
    {
        return response()->json(new CheckDetailsResource($check), 200);
    }

    public function check(Request $request) {
        $check = Check::find($request->id);

        if($check->checked == 1) {
            return response()->json($check, 400);
        }

        $check->checked = 1;
        $check->lat = $request->lat;
        $check->long = $request->long;
        $check->checked_date = date("Y-m-d H:i:s");
        $check->save();

        return response()->json($check, 202);
    }
}
