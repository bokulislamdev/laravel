<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Models\Student;
use Excel;
use App\imports\UsersImport;
use App\Exports\UsersExport;
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function multiSelect(){
        return view('pages.multi-select');
    }





    //STUDENTS
    public function addStudent(){
        $data['class'] = StudentClass::get();
        return view('student.add-student',$data);
    }

    public function studentPost(Request $request){
        $data = new Student();
        $data->name = $request->name;
        $data->roll = $request->roll;
        $data->student_classes_id = $request->student_classes_id;
        $data->save();
        return redirect()->route('student.show');
    }

    public function studentShow(Request $request){

        $import_result = $request->student_search;
        $query = Student::query();

        if($import_result){
            $data['search_result'] = $import_result; 
            $query =  $query->where('name','LIKE', "%$import_result%");
        }

        $data['student'] = $query->paginate(3);
        return view('student.show',$data);
    }




    //import,export,pdf
    public function export(){
        $students = Student::get();
        return Excel::download(new UsersExport($students), 'students.xlsx');
    }
    
    public function studentImport(Request $request){
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }

    public function exportPdf(){
        $data['students'] = Student::get();
        $pdf = PDF::loadview('student.show-export',$data);
        return $pdf->download('student.pdf');
    }



    //liveware
    public function livewareForm(){
        return view('liveware-practic.form');
    }


    public function product(){
        return view('liveware-practic.product');
    }
    



    
}
