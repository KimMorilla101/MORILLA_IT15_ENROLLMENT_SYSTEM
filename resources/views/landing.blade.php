@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4 text-center">Welcome to the Student Portal</h2>
    <p class="lead text-center" style="font-size: 1.3rem; color: #000000; background-color: #f8f9fa; padding: 15px; border-radius: 10px;">
    Use the menu above to explore Students and Courses.
    </p>

    <h4 class="mt-5">Enrolled Students</h4>
    @if(isset($students) && $students->count())
        <ul class="list-group">
            @foreach($students as $student)
                <li class="list-group-item">{{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}</li>
            @endforeach
        </ul>
    @else
        <p class="text-muted">No students have been added yet.</p>
    @endif
</div>
@endsection
