@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-strip">
                    <thead>
                        <tr>
                            <th>course id</th> 
                            <td>course name</td>
                            <td>course credit</td>
                        </tr> 
                    </thead> 
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <th>{{$item->course_id}}</th>
                            <td>{{$item->course_name}}</td>
                            <td>{{$item->course_credit}}</td>
                        </tr> 
                        @endforeach 
                    </tbody>
                </table>
                <a href="/"><button class="btn btn-primary">back</button></a> 
            </div> 
        </div> 
    </div>
@endsection