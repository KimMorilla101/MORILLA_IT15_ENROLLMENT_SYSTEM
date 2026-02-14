@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h1 class="display-5 fw-semibold">Courses</h1>
            <p class="lead bg-secondary bg-opacity-10 p-2 rounded"><strong>Browse available courses and view enrolled students.</strong></p>
        </div>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Capacity</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courses as $course)
            <tr>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->capacity }}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('courses.show', $course->id) }}">View</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No courses available.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
