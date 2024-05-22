<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceType;

class ServiceTypeController extends Controller
{
    public function get() {
        $serviceType = ServiceType::all();
        return response()->json($serviceType);
    }
}
