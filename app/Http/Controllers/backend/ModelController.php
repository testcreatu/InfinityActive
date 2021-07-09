<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelNumber;
use Illuminate\Support\Str;

class ModelController extends Controller
{
    public function add()
    {
    	return view('admin.model.addModel');
    }

    public function save(Request $request)
    {
    	$model = new ModelNumber;
    	$model->model_number = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']);
    	$model->model_number_slug = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']));
    	$model->type = 'cloth';
    	$model->save();
    	return redirect('admin/model')->with('message','Model Added Succesfully');
    }

    public function view()
    {
    	$models = ModelNumber::all();
    	return view('admin.model.model', compact('models'));
    }

    public function edit($id)
    {
    	$model = ModelNumber::where('id', $id)->get()->first();
    	return view('admin.model.editModel', compact('model'));
    }

    public function update(Request $request, $id)
    {
    	$model = ModelNumber::where('id', $id)->get()->first();
    	$model->model_number = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']);
    	$model->model_number_slug = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name']));
    	$model->type = 'cloth';
    	$model->save();
    	return redirect('admin/model')->with('message','Model Updated Succesfully');

    }

    public function delete($id)
    {
    	$model = ModelNumber::where('id', $id)->get()->first();
    	$model->delete();
    	return redirect('admin/model')->with('msg','Model Deleted Succesfully');
    }
}
