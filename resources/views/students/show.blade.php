@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Student Profile</h1>
    <p><strong>Student Number:</strong> {{ $student->student_number }}</p>
    <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <h3>Enrolled Courses</h3>
    <ul>
        @forelse($student->courses as $course)
            <li>{{ $course->course_code }} - {{ $course->course_name }}</li>
        @empty
            <li>No courses enrolled.</li>
        @endforelse
    </ul>
    <h3>Enroll in a Course</h3>
    <form action="{{ route('enrollments.enroll') }}" method="POST">
        @csrf
        <input type="hidden" name="student_id" value="{{ $student->id }}">
        <div class="mb-3">
            <label for="course_id" class="form-label">Select Course</label>
            <select name="course_id" id="course_id" class="form-select">
                @foreach(\App\Models\Course::all() as $course)
                    <option value="{{ $course->id }}">{{ $course->course_code }} - {{ $course->course_name }}</option>
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
    <a href="{{ route('students.index') }}">Back to Students</a>
</div>
@endsection
