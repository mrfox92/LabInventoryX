<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function services()
    {
        return view('admin.services');
    }

    public function home ()
    {
        
        return view('admin.home');
    }
}
