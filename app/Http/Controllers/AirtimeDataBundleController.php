<?php

namespace App\Http\Controllers;

use App\Models\AirtimeDataBundles;
use Illuminate\Http\Request;

class AirtimeDataBundleController extends Controller
{
    public function listByService($serviceId)
    {
        $bundles = AirtimeDataBundles::where('service_id', $serviceId)->get();

        if ($bundles->isEmpty()) {
            return response()->json(['message' => 'No bundles found for this service'], 404);
        }

        return response()->json($bundles, 200);
    }

}
