@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="mb-3">Course Details</h3>
    <p><strong>Course Code:</strong> {{ $course->course_code }}</p>
    <p><strong>Course Name:</strong> {{ $course->course_name }}</p>
    <p><strong>Capacity:</strong> {{ $course->capacity }}</p>
    <h3 class="mb-3">Enrolled Students</h3>
    <ul>
        @forelse($course->students as $student)
            <li>{{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}</li>
        @empty
            <li>No students enrolled.</li>
        @endforelse
    </ul>
    <h4 class="mb-3">Enroll a Student</h4>
    <form action="{{ route('enrollments.enroll') }}" method="POST">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">
        <div class="mb-3">
            <label for="student_id" class="form-label">Select Student</label>
            <select name="student_id" id="student_id" class="form-select">
                @foreach(\App\Models\Student::all() as $student)
                    <option value="{{ $student->id }}">{{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enroll</button>
    </form>
    @if($errors->has('enrollment'))
        <div class="alert alert-danger mt-2">{{ $errors->first('enrollment') }}</div>
    @elseif(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif
    <a href="{{ route('courses.index') }}">Back to Courses</a>
</div>
@endsection
