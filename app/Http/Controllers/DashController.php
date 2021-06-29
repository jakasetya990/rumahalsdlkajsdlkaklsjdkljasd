<?php

namespace App\Http\Controllers;

use App\Models\ApkList;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $data =  ApkList::get();
        
        return view('admin.index', [
            'apklist' => $data
        ]);
    }
}
