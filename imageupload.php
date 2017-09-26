<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class imageupload extends Controller
{
	public function index()
	{
		return view('pic');
	}
    public function upload(Request $request)
    {
       return $request->picture->store('public');

    	    }

}
