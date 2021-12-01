<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Grade;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instructor.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::pluck('name', 'id');

        $levels = Level::pluck('name', 'id');

        $grades = Grade::pluck('name', 'id');

        $prices = Price::pluck('name', 'id');

        return view('instructor.courses.create', compact('areas', 'levels', 'grades', 'prices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'subtitle' => 'required',
            'description' => 'required',
            'area_id' => 'required',
            'grade_id' => 'required',
            'price_id' => 'required',
            'file'  =>  'image'       
        ]);

        $course = Course::create($request->all()); //CREO EL REGISTRO DE CUROS

        // CON ESTO SE RELACIONA LAS IMAGANES
        if($request->file('file')){
            
            $url = Storage::put('public/courses', $request->file('file'));

            $course->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('instructor.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $areas = Area::pluck('name', 'id');

        $levels = Level::pluck('name', 'id');

        $grades = Grade::pluck('name', 'id');

        $prices = Price::pluck('name', 'id');

        // return $prices; para verificar

        return view('instructor.courses.edit', compact('course', 'areas', 'levels', 'grades', 'prices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses,slug,'. $course->id,
            'subtitle' => 'required',
            'description' => 'required',
            'area_id' => 'required',
            'grade_id' => 'required',
            'price_id' => 'required',
            'file'  =>  'image'    
        ]);

        $course->update($request->all());

        if($request->file('file')){
            $url = Storage::put('public/courses', $request->file('file'));

            if($course->image){
                Storage::delete($course->image->url);

                $course->image->update([
                    'url' => $url
                ]);
            }else{
                $course->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('instructor.courses.edit', $course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function status (Course $course){
        $course->status = 2;
        $course->save();
        return back();
    }
}
