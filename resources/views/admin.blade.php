@extends('layout')


@section('content')


    <div class="container">
        <div class="section">
            <div class="border border-dark rounded">
                <h3 class="mb-3">all students</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody id="studentList">
                    </tbody>
                </table>
            </div>
        </div>


        <div class="section mt-3">
            <div class="border border-dark rounded">
                <h3 class="mb-3">all courses</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody id="courseList"></tbody>
                </table>
            </div>
        </div>
    </div>

@endsection