<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Requests\FormsRequest;



class formController extends Controller
{

    public function index()
    {
        $forms = Form::all();
        return view('test.list' , compact('forms'));
    }

    public function create()
    {
        return view('test.create');
    }



    public function store(FormsRequest $request)
    {
        $forms = Form::create(request()->all());


        if ($request->hasfile('image')) {
            $images = $request->file('image');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');

                Image::create([
                    'name' => $name,
                    'path' => '/storage/'.$path
                ]);
            }
        }
        return redirect()->route('dashboard.forms.index')->withSuccess('Add Form...');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $form = Form::find($id);
        return view('test.update' , compact('form'));
    }

    public function update(Request $request, $id)
    {
        Form::find($id)->update(request()->post());
        return redirect()->route('dashboard.forms.index');
    }

    public function destroy($id)
    {
        Form::find($id)->delete();
        return redirect()->back();
    }
}
