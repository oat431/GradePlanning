<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Auth::user()->student_id;
        $course = DB::select("SELECT course_id from registrations where student_id = ?",[$student]);
        $data = DB::select("SELECT * FROM courses");
        $tempData = [];
        foreach($course as $item){
            array_push($tempData,$item->course_id);
        }
        $realData = [];
        foreach($data as $item){
            if(!in_array($item->course_id,$tempData)){
                $subject = DB::select("SELECT * from courses where course_id = ?",[$item->course_id]);
                array_push($realData,$subject);
            }
        }
        return view('enroll',compact(['realData']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "StudentID" => "required",
            "CourseID" => "required"
        ]);
        $registration = new registration;
        $registration->semester_name = "2/2020";
        $registration->student_id = $request->get('StudentID');
        $registration->course_id = $request->get('CourseID');
        $registration->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = DB::select("SELECT course_id FROM registrations where student_id=?",[$id]);
        $realData = [];
        foreach($course as $item){
            $subject = DB::select("SELECT * from courses where course_id=?",[$item->course_id]);
            array_push($realData,$subject);
        }
        return view('grading',compact(['realData']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
