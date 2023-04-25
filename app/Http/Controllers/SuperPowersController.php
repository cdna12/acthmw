<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperPowers;

class SuperPowersController extends Controller
{
    public function index()
    {
        $superpowers = SuperPowers::where('user_id',Auth::id())
            ->where('active',1)
            ->select('id','name','description')
            ->get();
        return view('superpowers.index',compact('superpowers'));
    }

    public function create()
    {
        return view('superpowers.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function show(string $id)
    {
       
    }

    public function edit(string $id)
    {
        $superpowers = SuperPowers::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->select('id','name','description')
        ->firstOfFail();
    return view('superpowers.edit',compcat('superpower'));
    }

    public function update(Request $request,string $id)
    {
        $superpowers = SuperPowers::where('user_id',Auth::id())
        ->where('id',$id)
        ->where('active',1)
        ->select('id','name','description')
        ->firstOfFail();

        $superpowers->update([
            'name'=> $request->name,
            'description'=>$request->description
        ]);

    }

    public function destroy(string $id)
    {
        
    }
}

