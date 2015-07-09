<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use App\Model\Student;
class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('crud/index');
    }

    public function view()
    {
        $student = Student::all();
        return view('crud/view')->with('student',$student);
    }

    public function saveStudent(Request $request)
    {
        $student = new Student();
        //$students->id = 100;
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->address = $request->input('address');
        $student->save();
        //Session::flash('message','students save');
        return redirect('/');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $student = new Student();
        $student=$student::find($id);
        return view('crud/edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateStudent(Request $request)
    {
        $id=$request->input('id');
        $student = new Student();
        $student=$student::find($id);
        $student->fname = $request->input('fname',50);
        $student->lname = $request->input('lname',50);
        $student->email = $request->input('email',50);
        $student->password = $request->input('password',50);
        $student->address = $request->input('address');
        $student->save();
        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
        $student = new Student();
        $student::find($id)->delete();
        return redirect('/view');
    }
}
