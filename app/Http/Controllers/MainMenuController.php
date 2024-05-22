<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainMenu;

class MainMenuController extends Controller
{
    public function get(string $serviceTypeId) {
        $mainMenu =  MainMenu::where('service_type_id', $serviceTypeId)->get();
        return response()->json($mainMenu);
    }
}
