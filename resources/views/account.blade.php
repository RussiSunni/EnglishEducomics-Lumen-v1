@extends('layout')


@section('content')
    <div class="section h-100">
        <div class="container">

            <div class="border border-dark rounded">
                <h3 class="mb-3">account info</h3>
                <p><strong>name:</strong> <span id="currentUser"></span></p>
                <p><strong>familiar:</strong> <span id="familiar"></span></p>
                <p><strong>your current courses:</strong></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Completed</th>
                        </tr>
                    </thead>
                    <tbody id="userCourseList"></tbody>
                </table>

            </div>

        </div>
    </div>


@endsection

	


