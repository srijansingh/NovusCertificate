@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Certificate Generation Portal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                            <table class="table table-responsive table-borderless">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Registration</th>

                                    <th>School</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($student as $students)
                                    <tr >
                                        <td style="font-weight:bold">{{$students->id}}</td>
                                        <td>{{$students->name}}</td>
                                        <td>{{$students->regno}}</td>

                                        <td>{{$students->schname}}</td>
                                        <td ><a href="{{route('data',$students->id)}}" style="text-decoration: none;color:blue;font-weight:bold" class="" >Download</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        {{ $student->links() }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
