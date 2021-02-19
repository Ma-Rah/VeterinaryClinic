<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;

class PetUpdateController extends Controller
{
    public function index() 
    { 
        return view('pet-update');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'owner_id' => 'required'
        ]);

        $pet = new Pet;

        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->weight = $request->input('weight');
        $pet->age = $request->input('age');
        $pet->owner_id = $request->input('owner_id');

        $pet->save();

        session()->flash('success_message', 'The pet was saved');

        return redirect(action('PetsController@index'));
    }

    public function update() 
    { 
        
    } 
}
