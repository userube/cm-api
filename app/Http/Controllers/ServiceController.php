<?php
namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    public function listServices()
    {
        $services = Service::all();
        return response()->json(['services' => $services]);
    }
}