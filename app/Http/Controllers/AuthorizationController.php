<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\course;

class AuthorizationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewCourses()
    {
        $this->authorize('view courses');

        $course = DB::table('courses')->get();

        return view('view', ['course' =>$course]);
        
    }

    public function createCourses()
    {
        $this->authorize('create courses');
        // mengambil data dari table pegawai
    	$course = DB::table('courses')->get();
 
    	// mengirim data pegawai ke view index
    	return view('course',['course' => $course]);

    }

    public function editCourses( Request $request)
    {
        $this->authorize('edit courses');

        return view('add');
    }

    public function updateCourses($id)
    {
        $this->authorize('update courses');

        $course = DB::table('courses')->where('id',$id)->get();

        return view('update', ['courses'=> $course]);

    }

    public function deleteCourses($id)
    {
        $this->authorize('delete courses');

        DB::table('courses')->where('id',$id)->delete();

        return redirect('/create-course');
        
    }

    public function store(Request $request){
        DB::table('courses')->insert([
            'name' => $request->name,
            'note' => $request->note
        ]);

        return redirect('/create-course');

    }

    public function ubahCourses(Request $request){

        DB::table('courses')->where('id', $request->id)->update([
            'name' => $request->name,
            'note' => $request->note
        ]);
        return redirect('/create-course');
    }
}
