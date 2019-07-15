<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

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

        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->logo = $request->logo->store('logos');
        $course->schedules = $request->schedules->store('schedules');
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
        
        $course->name = $request->name;
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->logo = $request->logo->store('logos');
        $course->schedules = $request->schedules->store('schedules');
        $course->update();
        
        return redirect(route('admin.courses.show', compact('course')));
    }

    public function show(Course $course)
    {
        return view('admin.course.show', compact('course'));
    }

    private function validation(Request $request)
    {
        dd($request);
        $request->validate([
           'course.name'        => 'required|min:4|max:50',
           'course.duration'    => 'required|min:4|max:50',
           'course.logo'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'course.schedules'   => 'required|mimes:pdf|max:2048',
           'course.description' => 'required|min:4',
       ]);
    }
}
