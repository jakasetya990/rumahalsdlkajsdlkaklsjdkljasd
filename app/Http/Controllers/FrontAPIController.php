<?php

namespace App\Http\Controllers;

use App\Models\ApkList;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Cache;

class FrontAPIController extends Controller
{
    public function apkInfo($packageName)
    {
        $data =  Cache::remember('apkinfo-' . $packageName, 300, function () use ($packageName) {
            return ApkList::where('apk_package', $packageName)->first();
        });
        if ($data !== null) {
            return response([
                'success' => true,
                'data' => $data
            ]);
        } else {
            return response([
                'success' => false,
                'data' => $data
            ]);
        }
    }
}
