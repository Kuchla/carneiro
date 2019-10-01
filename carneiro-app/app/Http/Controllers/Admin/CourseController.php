<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index(Course $course)
    {
        $courses = Course::all();
        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request, Course $course)
    {
        $this->validation($request);

        $course->user_id = Auth::id();
        $course->name = $request->course['name'];
        $course->duration = $request->course['duration'];
        $course->description = $request->course['description'];
        $course->logo = $request->course['logo']->store('logos');
        $course->schedule_integrated = $request->course['schedule_integrated']->store('schedules');
        $course->schedule_subsequent = $request->course['schedule_subsequent']->store('schedules');
        $course->save();

        return redirect(route('admin.courses.show', compact('course')));
    }

    public function edit(Course $course)
    {
        return view('admin.course.edit', compact('course'));
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route('admin.courses.index'));
    }

    public function update(Request $request, Course $course)
    {
        $this->validation($request);

        $course->user_id = Auth::id();
        $course->name = $request->course['name'];
        $course->duration = $request->course['duration'];
        $course->description = $request->course['description'];
        $course->logo_course = isset($request->course['logo']) ? $request->course['logo']->store('logos') : null;
        $course->integrated_schedule = isset($request->course['schedule_integrated']) ? $request->course['schedule_integrated']->store('schedules') : null;
        $course->subsequent_schedule = isset($request->course['schedule_subsequent']) ? $request->course['schedule_subsequent']->store('schedules') : null;
        $course->update();

        return redirect(route('admin.courses.show', compact('course')));
    }

    public function show(Course $course)
    {
        return view('admin.course.show', compact('course'));
    }

    private function validation(Request $request)
    {
        $request->validate([
           'course.name'        => 'required|min:4|max:50',
           'course.duration'    => 'required|min:4|max:50',
           'course.logo'        => $request->isMethod('post') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
           'course.schedule_integrated'   => 'nullable',
           'course.schedule_subsequent'   => 'nullable',
           'course.description' => 'required|min:4',
       ]);
    }
}
