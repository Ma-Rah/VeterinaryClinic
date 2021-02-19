<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PetsController extends Controller
{
    public function index() 
    { 
		$pets = DB::table('pets')->paginate(25);
		
        return view('pets', compact('pets'));
    }

	public function show($id)
    {
        $pet = DB::table("pets")->find($id);

		$owner =  DB::table("owners")->where('id', $pet->owner_id)->get();
		
        return view("pet_info.pet_info", compact(["pet",'owner']));
    }

    public function search(Request $request)
    { 
        $search = $request->search;
        $pets = Pet::where('name', 'like', '%'.$search.'%')->get();

        return view('pet-search-results', compact(['pets']));
    }
}
