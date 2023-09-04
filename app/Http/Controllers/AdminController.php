<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "halo selamat datang!";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
        echo "Data CPBUMD";
        echo "<a href='/admins'>Data CPBUMD</a>";

    }
    function applicant()
    {
        echo "halo selamat datang!";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
