<?php

namespace App\Http\Controllers;

use App\Models\Owner;
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
		$pets =  DB::table("pets")->where('owner_id', $id)->get();

        return view("owner_info.owner_info", compact(["owner", 'pets']));
    }

    public function search(Request $request)
    { 
        $search = $request->search();
        $owner = Owner::where('name', 'like', '%'.$search.'%')->get();

        return view('search_results', compact(['owner','pets']));
    }
}
