<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
	{
	    return People::all();
	}
	public function show(People $people)
	{
	    return $people;
	}
	public function store(Request $request)
	{
	    $people = People::create($request->all());
	    return response()->json($people, 201);
	}
	public function update(Request $request, People $people)
	{
	    $people->update($request->all());
	    return response()->json($people, 200);
	}
	public function delete(People $people)
	{
	    $people->delete();
	    return response()->json(null, 204);
	}
}
