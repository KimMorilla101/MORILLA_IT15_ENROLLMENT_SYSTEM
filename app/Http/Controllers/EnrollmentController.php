<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function enroll(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::findOrFail($request->student_id);
        $course = Course::findOrFail($request->course_id);

        // Prevent duplicate enrollment
        if ($student->courses()->where('course_id', $course->id)->exists()) {
            return back()->withErrors(['enrollment' => 'Student is already enrolled in this course.']);
        }

        // Check course capacity
        if ($course->students()->count() >= $course->capacity) {
            return back()->withErrors(['enrollment' => 'Course capacity has been reached.']);
        }

        $student->courses()->attach($course->id);
        return back()->with('success', 'Student enrolled successfully.');
    }
}
