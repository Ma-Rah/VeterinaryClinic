<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerUpdateController extends Controller
{

    public function index() 
    { 
        return view('owner-update');
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'first_name' => 'required',
            'surname' => 'required',
        ]);

        $owner = new Owner;

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');

        $owner->save();

        session()->flash('success_message', 'The owner was saved');

        return redirect(action('OwnerUpdateController@index'));
    }

    public function update() 
    { 
        
    } 
}

