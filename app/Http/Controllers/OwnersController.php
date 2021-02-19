<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnersController extends Controller
{
	public function index() 
    { 
		$owners = DB::table('owners')->paginate(25);
		
        return view('owners', compact('owners'));
    }

	public function show($id)
    {
        $owner = DB::table("owners")->find($id);
      
        return view("owner_info.owner_info", compact(["owner"]));
    }
}
