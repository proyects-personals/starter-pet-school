<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class UserSchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('user.dashboard', compact('schools'));
    }
}
