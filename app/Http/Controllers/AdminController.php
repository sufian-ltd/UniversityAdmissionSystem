<?php

namespace App\Http\Controllers;

use App\Result;
use App\Student;
use App\Unit;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('admin-login-form');
    }
    public function adminSection(){
        return view('admin-section');
    }
    public function login(Request $request){
        if($request->email == 'admin@gmail.com' && $request->password == '12345')
            return redirect()->route('adminSection');
        else
            return redirect()->route('adminLogin');
    }
    public function student(){
        $student=Student::all();
        return view('student')->with('student',$student);
    }
    public function addStudent(){
        return view('add-student');
    }
    public function saveStudent(Request $request){
        $student=new Student();
        $student->roll_no=$request->roll_no;
        $student->reg_no=$request->reg_no;
        $student->group=$request->group;
        $student->name=$request->name;
        $student->center=$request->center;
        $student->institution=$request->institution;
        $student->std_type=$request->std_type;
        $student->passing_year=$request->passing_year;
        $student->ssc_hsc=$request->ssc_hsc;
        $student->gpa=$request->gpa;
        $student->grade=$request->grade;
        $student->save();
        return redirect()->route('student');
    }
    public function editStudent($roll_no){
        $student=Student::where('roll_no', '=', $roll_no)->first();
        return view('edit-student')->with('student',$student);
    }
    public function updateStudent(Request $request,$roll_no){
//        $student=Student::where('roll_no', '=', $roll_no)->first();
//        $student->roll_no=$request->roll_no;
//        $student->reg_no=$request->reg_no;
//        $student->group=$request->group;
//        $student->name=$request->name;
//        $student->center=$request->center;
//        $student->institution=$request->institution;
//        $student->std_type=$request->std_type;
//        $student->passing_year=$request->passing_year;
//        $student->ssc_hsc=$request->ssc_hsc;
//        $student->gpa=$request->gpa;
//        $student->grade=$request->grade;
//        $student->save();
        Student::where('roll_no','=',$roll_no)
            ->update(['group' => $request->group])
            ->update(['name' => $request->name])
            ->update(['center' => $request->center])
            ->update(['institution' => $request->institution])
            ->update(['std_type' => $request->std_type])
            ->update(['passing_year' => $request->passing_year])
            ->update(['ssc_hsc' => $request->ssc_hsc])
            ->update(['gpa' => $request->gpa])
            ->update(['grade' => $request->grade]);
        return redirect()->route('student');
    }
    public function deleteStudent($roll_no){
        DB::table('students')->where('roll_no','=',$roll_no)->delete();
        return redirect()->route('student');
    }
    public function addStudentResult($roll_no){
        $student=Student::where('roll_no', '=', $roll_no)->first();
        if($student->group == 'Science' && $student->ssc_hsc == 'ssc')
            return view('add-ssc-science-result')->with('roll_no',$roll_no);
        else if($student->group == 'Science' && $student->ssc_hsc == 'hsc')
            return view('add-hsc-science-result')->with('roll_no',$roll_no);
        else if($student->group == 'Commerce' && $student->ssc_hsc == 'ssc')
            return view('add-ssc-commerce-result')->with('roll_no',$roll_no);
        else if($student->group == 'Commerce' && $student->ssc_hsc == 'hsc')
            return view('add-hsc-commerce-result')->with('roll_no',$roll_no);
        else if($student->group == 'Arts' && $student->ssc_hsc == 'ssc')
            return view('add-ssc-arts-result')->with('roll_no',$roll_no);
        else if($student->group == 'Arts' && $student->ssc_hsc == 'hsc')
            return view('add-hsc-arts-result')->with('roll_no',$roll_no);
    }
    public function viewStudentResult($roll_no){
        $result=Result::where('roll_no', '=', $roll_no)->get();
        return view('view-result-data')->with('roll_no',$roll_no)
                ->with('result',$result);
    }
    public function saveSSCResultData(Request $request){
        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code1;
        $result->subject_name=$request->subject_name1;
        $result->subject_type=$request->subject_type1;
        $result->gpa=$request->gpa1;
        $result->grade=$request->grade1;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code2;
        $result->subject_name=$request->subject_name2;
        $result->subject_type=$request->subject_type2;
        $result->gpa=$request->gpa2;
        $result->grade=$request->grade2;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code3;
        $result->subject_name=$request->subject_name3;
        $result->subject_type=$request->subject_type3;
        $result->gpa=$request->gpa3;
        $result->grade=$request->grade3;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code4;
        $result->subject_name=$request->subject_name4;
        $result->subject_type=$request->subject_type4;
        $result->gpa=$request->gpa4;
        $result->grade=$request->grade4;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code5;
        $result->subject_name=$request->subject_name5;
        $result->subject_type=$request->subject_type5;
        $result->gpa=$request->gpa5;
        $result->grade=$request->grade5;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code6;
        $result->subject_name=$request->subject_name6;
        $result->subject_type=$request->subject_type6;
        $result->gpa=$request->gpa6;
        $result->grade=$request->grade6;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code7;
        $result->subject_name=$request->subject_name7;
        $result->subject_type=$request->subject_type7;
        $result->gpa=$request->gpa7;
        $result->grade=$request->grade7;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code8;
        $result->subject_name=$request->subject_name8;
        $result->subject_type=$request->subject_type8;
        $result->gpa=$request->gpa8;
        $result->grade=$request->grade8;
        $result->save();

        $result=new Result();
        $result->roll_no=$request->roll_no;
        $result->subject_code=$request->subject_code9;
        $result->subject_name=$request->subject_name9;
        $result->subject_type=$request->subject_type9;
        $result->gpa=$request->gpa9;
        $result->grade=$request->grade9;
        $result->save();
    }

    public function saveHSCResultData(Request $request)
    {
        $result = new Result();
        $result->roll_no = $request->roll_no;
        $result->subject_code = $request->subject_code1;
        $result->subject_name = $request->subject_name1;
        $result->subject_type = $request->subject_type1;
        $result->gpa = $request->gpa1;
        $result->grade = $request->grade1;
        $result->save();

        $result = new Result();
        $result->roll_no = $request->roll_no;
        $result->subject_code = $request->subject_code2;
        $result->subject_name = $request->subject_name2;
        $result->subject_type = $request->subject_type2;
        $result->gpa = $request->gpa2;
        $result->grade = $request->grade2;
        $result->save();

        $result = new Result();
        $result->roll_no = $request->roll_no;
        $result->subject_code = $request->subject_code3;
        $result->subject_name = $request->subject_name3;
        $result->subject_type = $request->subject_type3;
        $result->gpa = $request->gpa3;
        $result->grade = $request->grade3;
        $result->save();

        $result = new Result();
        $result->roll_no = $request->roll_no;
        $result->subject_code = $request->subject_code4;
        $result->subject_name = $request->subject_name4;
        $result->subject_type = $request->subject_type4;
        $result->gpa = $request->gpa4;
        $result->grade = $request->grade4;
        $result->save();

        $result = new Result();
        $result->roll_no = $request->roll_no;
        $result->subject_code = $request->subject_code5;
        $result->subject_name = $request->subject_name5;
        $result->subject_type = $request->subject_type5;
        $result->gpa = $request->gpa5;
        $result->grade = $request->grade5;
        $result->save();

        $result = new Result();
        $result->roll_no = $request->roll_no;
        $result->subject_code = $request->subject_code6;
        $result->subject_name = $request->subject_name6;
        $result->subject_type = $request->subject_type6;
        $result->gpa = $request->gpa6;
        $result->grade = $request->grade6;
        $result->save();
    }
    public function viewUniversity(){
        $university=University::all();
        return view('view-university')->with('university',$university);
    }
    public function addUniversity(){
        return view('add-university');
    }
    public function saveUniversity(Request $request){
        $university=new University();
        if($request->ssc_group != '0' && $request->hsc_group != '0') {
            $university->name = $request->name;
            $university->type = $request->type;
            $university->category = $request->category;
            $university->location = $request->location;
            $university->unit = $request->unit;
            $university->min_req = $request->min_req;
            $university->ssc_group = $request->ssc_group;
            $university->hsc_group = $request->hsc_group;
            $university->save();
            return redirect()->route('viewUniversity');
        }
        else{
            return redirect()->route('addUniversity');
        }
    }
    public function editUniversity($id){
        $university=University::find($id);
        return view('edit-university')->with('university',$university);
    }
    public function updateUniversity($id,Request $request){
        $university=University::find($id);
        $university->name=$request->name;
        $university->type=$request->type;
        $university->category=$request->category;
        $university->location=$request->location;
        $university->unit=$request->unit;
        $university->min_req=$request->min_req;
//        $university->ssc_group=$request->ssc_group;
//        $university->hsc_group=$request->hsc_group;
        $university->save();
        return redirect()->route('viewUniversity');
    }
    public function deleteUniversity($id){
        $university=University::find($id);
        $university->delete();
        return redirect()->route('viewUniversity');
    }
    public function viewUnit($id){
        $unit=Unit::where('uni_id', '=', $id)->get();
        return view('view-unit')->with('unit',$unit)->with('uni_id',$id);
    }
    public function addUnit($id){
        return view('add-unit')->with('uni_id',$id);
    }
    public function saveUnit($uni_id,Request $request){
        $unit=new Unit();
        $unit->uni_id=$uni_id;
        $unit->name=$request->name;
        $unit->subject=$request->subject;
        $unit->ssc_req=$request->ssc_req;
        $unit->hsc_req=$request->hsc_req;
        $unit->total_req=$request->total_req;
        $unit->seat=$request->seat;
        $unit->ssc_group=$request->ssc_group;
        $unit->hsc_group=$request->hsc_group;
        $unit->save();
        return redirect()->route('viewUniversity');
    }
    public function editUnit($id,$uni_id){
        $unit=Unit::find($id);
        return view('edit-unit')->with('unit',$unit)
            ->with('id',$id)->with('uni_id',$uni_id);
    }
    public function updateUnit($id,$uni_id,Request $request){
        $unit=Unit::find($id);
        $unit->uni_id=$uni_id;
        $unit->name=$request->name;
        $unit->subject=$request->subject;
        $unit->ssc_req=$request->ssc_req;
        $unit->hsc_req=$request->hsc_req;
        $unit->total_req=$request->total_req;
        $unit->seat=$request->seat;
        $unit->ssc_group=$request->ssc_group;
        $unit->hsc_group=$request->hsc_group;
        $unit->save();
        return redirect()->route('viewUnit',[$uni_id]);
    }
    public function deleteUnit($id,$uni_id){
        $unit=Unit::find($id);
        $unit->delete();
        return redirect()->route('viewUnit',[$uni_id]);
    }
}
