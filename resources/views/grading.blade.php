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
                        @foreach($realData as $item)
                        <tr>
                            <th>{{$item[0]->course_id}}</th>
                            <td>{{$item[0]->course_name}}</td>
                            <td>{{$item[0]->course_credit}}</td>
                            <td>
                                <form action="/graded" method="post">
                                @csrf
                                    <select name="grade">
                                        <option value="A">A</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="C+">C+</option>
                                        <option value="C">C</option>
                                        <option value="D+">D+</option>
                                        <option value="D">D</option>
                                        <option value="F">F</option> 
                                    </select> 
                                    <input type="submit" class='btn btn-success' value="grade" />
                                </form>
                            </td> 
                        </tr> 
                        @endforeach 
                    </tbody>
                </table>
                <a href="/"><button class="btn btn-primary">back</button></a> 
            </div> 
        </div> 
    </div>
@endsection