<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Messages;
use App\Models\Question;
use App\Models\Record;
use App\Models\Teachers;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function submitRecord(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'checkbox' => 'required',
        ]);
        $newRequest = new Record([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $newRequest->save();

        return redirect('/');
    }

    public function submitQuestion(Request $request)
    {
        $request->validate([
            'tel' => 'required',
            'checkbox2' => 'required',
        ]);
        $newRequest = new Question([
            'tel' => $request->tel,
        ]);

        $newRequest->save();

        return redirect('/');
    }

    public function getData()
    {
        $dataCourses = Courses::all();
        $dataTeachers = Teachers::all();
        $dataMessages = Messages::all();

        return view('layout.home', compact('dataCourses', 'dataTeachers', 'dataMessages'));
    }
}
