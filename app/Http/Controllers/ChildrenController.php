<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\Childrens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildrenController extends Controller
{

    public function create()
    {
        $parents = Parents::all();

        return view('children.create', ['parents' => $parents]);
    }

    public function store(Request $request)
    {

        $children = new Childrens();

        $children-> parentsId = $request->parentsId;
        $children-> name = $request->name;
        $children->save();

        $childrenId = $children->id;

        return redirect()->route('children.show', $childrenId);
    }

    public function show($id)
    {
        $parents = Parents::all();
        $children = Childrens::findOrFail($id);

        return view('children.show', ['children' => $children], ['parents' => $parents]);
    }

    public function edit($id){

        $children = Childrens::findOrFail($id);
        return view('children.edit', ['children' => $children]);

    }

    public function update(Request $request, $id)
    {
        $children = Childrens::findOrFail($id);

        $children->name = $request->name;
        $children->save();

        return view('children.edit', ['children' => $children]);
    }

    public function destroy($id){

        $parents = Childrens::find($id);
        $parents->delete();

        return view('children.create');

    }

}
