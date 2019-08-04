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
        $course->schedules = $request->course['schedules']->store('schedules');
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
        $course->schedules_course = isset($request->course['schedules']) ? $request->course['schedules']->store('schedules') : null;
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
           'course.schedules'   => $request->isMethod('post') ? 'required|mimes:pdf' : 'nullable',
           'course.description' => 'required|min:4',
       ]);
    }
}
