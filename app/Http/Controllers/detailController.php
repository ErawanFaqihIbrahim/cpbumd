<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\calonpengurus;
use Illuminate\Http\Response;
use App\Models\seleksiadmin;

class detailController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view('dashboard.detail');
    }
}
