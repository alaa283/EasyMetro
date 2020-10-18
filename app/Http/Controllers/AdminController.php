<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\suggested;

class AdminController extends Controller
{
    //

public function AdminIndex(){

	return view('Admin.dashboard');
}




}
