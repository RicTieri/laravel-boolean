<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cocktails = Cocktail::all();
        return response()->json(
            [
                'success' => true,
                'results' => $cocktails
            ],
        );
    }
}
