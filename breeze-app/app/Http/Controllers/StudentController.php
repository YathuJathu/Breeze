<?php

namespace App\Http\Controllers;

use App\Http\Requests\Studentrequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view("student.index",compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Studentrequest $request)
    {
        $data=$request->validated();
        $student=Student::create($data);
        return redirect('/home')->with('message','Student add sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view('student.edit',compact('student'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Studentrequest $request,$id)
    {
        $data=$request->validated();
        $student=Student::where('id',$id)->update([
            'name'=>$data['name'],
            'phone'=>$data['phone'],
            'email'=>$data['email']
        ]);
        // $student->name=$request->input("name");
        // $student->email=$request->input("email");
        // $student->phone=$request->input("phone");
        // $student->save();
        // return view('student.index');
        return redirect('/home')->with('message','Update suuccessfully');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destory($id)
    {
        $student=Student::find($id)->delete();
        return redirect('/home')->with('message','Delete successfully');

    }
}
