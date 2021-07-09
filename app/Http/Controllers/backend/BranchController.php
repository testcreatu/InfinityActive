<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Branch;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    public function add()
    {
    	return view('admin.branch.addBranch');
    }

    public function save(Request $request)
    {
    	$branch = new Branch;
    	$branch->branch_name = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']);
    	$branch->branch_name_slug = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']));
    	$branch->save();
    	return redirect('admin/branch')->with('message','Branch Added Succesfully');
    }

    public function view()
    {
    	$branches = Branch::all();
    	return view('admin.branch.branch', compact('branches'));
    }

    public function edit($id)
    {
    	$branch = Branch::where('id', $id)->get()->first();
    	return view('admin.branch.editBranch', compact('branch'));
    }

    public function update(Request $request, $id)
    {
    	$branch = Branch::where('id', $id)->get()->first();
    	$branch->branch_name = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']);
    	$branch->branch_name_slug = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']));
    	$branch->save();
    	return redirect('admin/branch')->with('message','Branch Updated Succesfully');

    }

    public function delete($id)
    {
    	$branch = Branch::where('id', $id)->get()->first();
    	$branch->delete();
    	return redirect('admin/branch')->with('msg','Branch Deleted Succesfully');
    }
}
