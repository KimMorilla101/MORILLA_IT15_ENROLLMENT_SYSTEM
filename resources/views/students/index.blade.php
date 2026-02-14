@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h1 class="display-5 fw-semibold">Students</h1>
            <p class="lead bg-secondary bg-opacity-10 p-2 rounded"><strong>Explore student profiles and enroll them into available courses.</strong></p>
        </div>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Student Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
            <tr>
                <td>{{ $student->student_number }}</td>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('students.show', $student->id) }}">View</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No students available.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
