<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Childrens;
use Illuminate\Database\Events\StatementPrepared;
use Illuminate\Http\Request;
use App\Models\Parents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Input;


class ParentsController extends Controller
{

    public function create(){
        $parents = Parents::all();

        return view('parents.create', ['parents'=> $parents]);
    }

    public function store(Request $request){

       $parents = new Parents();

        $parents->name_father = $request->name_father;
        $parents->name_mother = $request->name_mother;
        $parents->save();

       $parentsId = $parents->id;

        return redirect()->route('parents.show', $parentsId);
    }

    public function show($id){

        $parents = Parents::findOrFail($id);

        $parentsId = $parents->id;

        $children = DB::table('childrens')
            ->where('parentsId', '=', $parentsId)
            ->get();

        return view('parents.show', ['parents' => $parents], ['children' => $children]);
    }

    public function edit($id){

        $parents = Parents::findOrFail($id);

        $parentsId = $parents->id;

        $children = DB::table('childrens')
            ->where('parentsId', '=', $parentsId)
            ->get();

        return view('parents.edit', ['parents' => $parents], ['children' => $children]);

    }

    public function update(Request $request, $id)
    {
        $parents = Parents::findOrFail($id);

        $parents->name_father = $request->name_father;
        $parents->name_mother = $request->name_mother;
        $parents->save();

        return view('parents.edit', ['parents' => $parents]);
    }

    public function destroy($id){

        $parents = Parents::find($id);
        $parents->delete();

      return view('parents.create');
    }

}
