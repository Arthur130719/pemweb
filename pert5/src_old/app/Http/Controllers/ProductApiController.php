<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $client = $request->get('authenticated_client');

        return response()->json(
            $client->products()->get()
        );
    }


}
