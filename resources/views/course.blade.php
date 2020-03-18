@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Course</h2>
                </div>
                <a href="/view-course" class="btn btn-primary">Home</a>
                <div class="card-body">
                    <a href="/course/add" class="btn btn-primary">Input Course</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($course as $C)
                            <tr>
                                <td>{{ $C->name }}</td>
                                <td>{{ $C->note }}</td>
                                <td>
                                    <a href="/course/update/{{ $C->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/course/delete/{{ $C->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection