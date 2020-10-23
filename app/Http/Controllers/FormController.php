<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    //

    public function create() {
        return view();
    }

    public function store(StoreForm $request) {
        $form = new Form;

        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->email = $request->input('email');
        $form->subject = $request->input('subject');

        $form->save();
    }

    public function edit($id) {
        $form = Form::find($id);

        return view();
    }

    public function update($id, StoreForm $request) {
        $form = Form::find($id);

        $form->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
        ]);
    }

    public function delete($id) {

        $form = Form::find($id);

        $form->delete();

    }
}
