<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**Show Profile Page */
    public function index()
    {
        return view('myaccount.profile.index');
    }
}
