<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function dashbordfun($value='')
    {
    	
    	return view('backend.dashbord');
    }
}
