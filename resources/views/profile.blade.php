@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Enroll</div>
                <div class="card-body"><a href="/enroll"><button class="btn btn-primary">enroll</button></a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Plannin your grade</div>
                <div class="card-body"><a href="/grade/{{Auth::user()->student_id}}/grading"><button class="btn btn-primary">grading</button></a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Edit Profile</div>
                <div class="card-body"><a href="/student/{{Auth::user()->student_id}}/edit"><button class="btn btn-primary">edit</button></a></div>
            </div>
        </div> 
    </div>
</div>
@endsection