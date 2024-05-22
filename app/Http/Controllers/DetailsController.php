<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Details;

class DetailsController extends Controller
{
    public function get(string $mainMenuId) {
        $details =  Details::where('main_menu_id', $mainMenuId)->get();
        return response()->json($details);
    }
}
