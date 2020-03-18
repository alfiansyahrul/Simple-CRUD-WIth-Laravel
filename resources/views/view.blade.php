@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Course</h2>
                </div>
                <div class="card-body">
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

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection