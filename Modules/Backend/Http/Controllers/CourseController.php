<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Course;

class CourseController extends BaseController
{
    public function course()
    {
        $setTitle = __('Course');
        $this->setPageData($setTitle, $setTitle, 'far fa-handshake', [['name' => $setTitle]]);
        $data = Course::all();
        return view('backend::course', compact('data'));
    }
    public function create(Request $request)
    {
        $data = new Course();
        $data->course_name = $request->course_name;
        $data->course_details = $request->course_details;
        $data->price = $request->price;
        $data->instructor = $request->instructor;

        if ($request->hasFile('material')) {
            $file = $request->file('material');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('storage', $filename);
            $data->material = $filename;
        }
        $data->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        Course::find($id)->delete();
        return redirect()->back();
    }
}
