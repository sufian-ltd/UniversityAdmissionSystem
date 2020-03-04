<?php

namespace App\Http\Controllers;

use App\Result;
use App\Student;
use App\Unit;
use App\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Cast\Object_;

class MyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function result(Request $request)
    {
        $sscErrorMsg="";
        $hscErrorMsg="";

        $ssc_roll_no = $request->ssc_roll_no;
        $ssc_std=Student::where('roll_no', '=', $ssc_roll_no)
                ->where('ssc_hsc', '=', 'ssc')
                ->get();
        $ssc_result=Result::where('roll_no', '=', -1)->get();
        if(!$ssc_std->isEmpty())
            $ssc_result = Result::where('roll_no', '=', $ssc_roll_no)->get();
        if($ssc_roll_no!=null && $ssc_std->isEmpty()){
            $sscErrorMsg="Please Enter Your Valid SSC Roll Number...!!!!
            No Records Found For This Roll Number...!!!!";
        }

        $hsc_roll_no = $request->hsc_roll_no;
        $hsc_std=Student::where('roll_no', '=', $hsc_roll_no)
                ->where('ssc_hsc', '=', 'hsc')
                ->get();
        $hsc_result = Result::where('roll_no', -1)->get();
        if(!$hsc_std->isEmpty())
            $hsc_result = Result::where('roll_no', $hsc_roll_no)->get();
        if($hsc_roll_no!=null && $hsc_std->isEmpty()){
            $hscErrorMsg="Please Enter Your Valid HSC Roll Number...!!!!
            No Records Found For This Roll Number...!!!!";
        }
        $name1="";
        $name2="";
        if(!$hsc_std->isEmpty() && !$ssc_std->isEmpty()) {
            $name1 = $ssc_std->get(0)->name;
            $name2 = $hsc_std->get(0)->name;
            if($name1!=$name2) {
                $ssc_std = Student::where('roll_no', '=', -1)
                    ->where('ssc_hsc', '=', 'ssc')
                    ->get();
                $hsc_std = Student::where('roll_no', '=', -1)
                    ->where('ssc_hsc', '=', 'hsc')
                    ->get();
                $ssc_result = Result::where('roll_no', '=', -1)->get();
                $hsc_result = Result::where('roll_no', -1)->get();
                $hscErrorMsg = "Your Roll Number is similar with others...!!!!Please Try Again...!!!!";
            }
        }
//        if($hsc_roll_no!=null && $hsc_roll_no!=null && $name1!=$name2){
//            $ssc_std=Student::where('roll_no', '=', -1)
//                ->where('ssc_hsc', '=', 'ssc')
//                ->get();
//            $hsc_std=Student::where('roll_no', '=', -1)
//                ->where('ssc_hsc', '=', 'hsc')
//                ->get();
//            $ssc_result=Result::where('roll_no', '=', -1)->get();
//            $hsc_result = Result::where('roll_no', -1)->get();
//            $sscErrorMsg="Your Roll Number is similar with others...!!!!";
//            $hscErrorMsg="Your Roll Number is similar with others...!!!!";
//        }
        return view('result')->with('ssc_std',$ssc_std)
            ->with('hsc_std',$hsc_std)
            ->with('ssc_result', $ssc_result)
            ->with('hsc_result', $hsc_result)
            ->with('sscErrorMsg',$sscErrorMsg)
            ->with('hscErrorMsg',$hscErrorMsg)
            ->with('name1',$name1)
            ->with('name2',$name2);
    }
    public function university(Request $request,$ssc_roll,$hsc_roll)
    {
        $type=$request->type;
        $category=$request->category;
        $location='nothing';
        if($ssc_roll==0 || $hsc_roll==0){
            return $this->result($request);
        }
        if ($location != 'nothing') {
            $university = University::where('type', '=', $type)
                ->where('category', '=', $category)
                ->where('location', '=', $location)
                ->get();
        } else {
            $university = University::where('type', '=', $type)
                ->where('category', '=', $category)
                ->get();
        }

        $ssc_res = Student::where('roll_no', '=', $ssc_roll)->first();
        $ssc_gpa = $ssc_res->gpa;
        $hsc_res = Student::where('roll_no', '=', $hsc_roll)->first();
        $hsc_gpa = $hsc_res->gpa;

        $ssc_passing_year=$ssc_res->passing_year;
        $hsc_passing_year=$hsc_res->passing_year;

        $ssc_group=$ssc_res->group;
        $hsc_group=$hsc_res->group;

//        $canApply="Applicable";
//        if($category=='Medical'){
//            $ssc_biology=Result::where('roll_no', '=', $ssc_roll)
//                ->where('subject_code', '=', '1008')->first();
//            $gpa1=$ssc_biology->gpa;
//            $hsc_biology=Result::where('roll_no', '=', $hsc_roll)
//                ->where('subject_code', '=', '2006')->first();
//            $gpa2=$hsc_biology->gpa;
//            if($gpa1>=3.5 && $gpa2>=3.5 && $ssc_gpa>=3.5 && $hsc_gpa>=3.5)
//                $canApply="Applicable";
//            else
//                $canApply="Not Applicable";
//        }

        return view('university')->with('university', $university)
            ->with('ssc_roll', $ssc_roll)->with('hsc_roll', $hsc_roll)
            ->with('ssc_gpa', $ssc_gpa)->with('hsc_gpa', $hsc_gpa)
            ->with('ssc_passing_year',$ssc_passing_year)
            ->with('hsc_passing_year',$hsc_passing_year)
            ->with('ssc_group',$ssc_group)->with('hsc_group',$hsc_group);
    }
    public function unit($ssc_roll,$hsc_roll,$id)
    {
        $ssc_res=Student::where('roll_no','=',$ssc_roll)->first();
        $ssc_gpa=$ssc_res->gpa;
        $hsc_res=Student::where('roll_no','=',$hsc_roll)->first();
        $hsc_gpa=$hsc_res->gpa;

        $ssc_group=$ssc_res->group;
        $hsc_group=$hsc_res->group;

        $unit=Unit::where('uni_id','=',$id)->get();

        $ssc_physics=Result::where('roll_no', '=', $ssc_roll)
            ->where('subject_code', '=', '1006')->first()->gpa;
        $ssc_chemistry=Result::where('roll_no', '=', $ssc_roll)
            ->where('subject_code', '=', '1007')->first()->gpa;
        $ssc_math=Result::where('roll_no', '=', $ssc_roll)
            ->where('subject_code', '=', '1003')->first()->gpa;
        $ssc_biology=Result::where('roll_no', '=', $ssc_roll)
            ->where('subject_code', '=', '1008')->first()->gpa;
        $ssc_english=Result::where('roll_no', '=', $ssc_roll)
            ->where('subject_code', '=', '1002')->first()->gpa;

        $hsc_physics=Result::where('roll_no', '=', $hsc_roll)
            ->where('subject_code', '=', '2004')->first()->gpa;
        $hsc_chemistry=Result::where('roll_no', '=', $hsc_roll)
            ->where('subject_code', '=', '2005')->first()->gpa;
        $hsc_math=Result::where('roll_no', '=', $hsc_roll)
            ->where('subject_code', '=', '2003')->first()->gpa;
        $hsc_biology=Result::where('roll_no', '=', $hsc_roll)
            ->where('subject_code', '=', '2006')->first()->gpa;
        $hsc_english=Result::where('roll_no', '=', $hsc_roll)
            ->where('subject_code', '=', '2002')->first()->gpa;

        return view('unit')->with('unit',$unit)
            ->with('ssc_roll',$ssc_roll)->with('hsc_roll',$hsc_roll)
            ->with('ssc_gpa',$ssc_gpa)->with('hsc_gpa',$hsc_gpa)
            ->with('ssc_physics',$ssc_physics)->with('ssc_chemistry',$ssc_chemistry)
            ->with('ssc_biology',$ssc_biology)->with('ssc_math',$ssc_math)
            ->with('ssc_english',$ssc_english)->with('hsc_physics',$hsc_physics)
            ->with('hsc_chemistry',$hsc_chemistry)->with('hsc_biology',$hsc_biology)
            ->with('hsc_math',$hsc_math)->with('hsc_english',$hsc_english)
            ->with('ssc_group',$ssc_group)->with('hsc_group',$hsc_group);
    }
    public function universityInfo(Request $request)
    {
        $type=$request->type;
        $category=$request->category;
        $location=$request->location;

        if ($location != 'nothing') {
            $university = University::where('type', '=', $type)
                ->where('category', '=', $category)
                ->where('location', '=', $location)
                ->get();
        } else {
            $university = University::where('type', '=', $type)
                ->where('category', '=', $category)
                ->get();
        }
        return view('university-info')->with('university',$university);
    }
    public function myResult(Request $request)
    {
        $errorMsg="";
        
        $roll_no = $request->roll_no;
        $ssc_std=Student::where('roll_no', '=', $roll_no)
                ->where('ssc_hsc', '=', 'ssc')
                ->get();
        if($roll_no!=null && $ssc_std->isEmpty()){
            $errorMsg="Please Enter Your Valid Roll Number...!!!!
            No Records Found For This Roll Number...!!!!";
        }
        $result = Result::where('roll_no', '=', $roll_no)->get();

        return view('my-result')->with('std',$ssc_std)
            ->with('result', $result)
            ->with('errorMsg',$errorMsg);
    }

    public function sscResult(Request $request)
    {
        $errorMsg="";
        
        $roll_no = $request->roll_no;
        $std=Student::where('roll_no', '=', $roll_no)
                ->where('ssc_hsc', '=', 'ssc')
                ->get();
        $result=Result::where('roll_no', '=', -1)->get();;
        if(!$std->isEmpty())
            $result = Result::where('roll_no', '=', $roll_no)->get();
        if($roll_no!=null && $std->isEmpty()){
            $errorMsg="Please Enter Your Valid SSC Roll Number...!!!!
            No Records Found For This Roll Number...!!!!";
        }

        return view('ssc-result')->with('std',$std)
            ->with('result', $result)
            ->with('errorMsg',$errorMsg);
    }

    public function hscResult(Request $request)
    {
        $errorMsg="";
        
        $roll_no = $request->roll_no;
        $std=Student::where('roll_no', '=', $roll_no)
                ->where('ssc_hsc', '=', 'hsc')
                ->get();
        $result=Result::where('roll_no', '=', -1)->get();;
        if(!$std->isEmpty())
            $result = Result::where('roll_no', '=', $roll_no)->get();
        if($roll_no!=null && $std->isEmpty()){
            $errorMsg="Please Enter Your Valid HSC Roll Number...!!!!
            No Records Found For This Roll Number...!!!!";
        }

        return view('hsc-result')->with('std',$std)
            ->with('result', $result)
            ->with('errorMsg',$errorMsg);
    }

    public function unitInfo($id)
    {
        $unit=Unit::where('uni_id','=',$id)->get();
        return view('unit-info')->with('unit',$unit);
    }

    public function applicationForm($ssc_roll_no,$hsc_roll_no,$id,$uni_id){
        $ssc_std=Student::where('roll_no', '=', $ssc_roll_no)
            ->where('ssc_hsc', '=', 'ssc')
            ->get();
        $hsc_std=Student::where('roll_no', '=', $hsc_roll_no)
            ->where('ssc_hsc', '=', 'hsc')
            ->get();
        $unit=Unit::find($id);
        $university=University::where('id','=',$uni_id)->get()->first();
        return view('application-form')->with('ssc_std',$ssc_std)
            ->with('hsc_std',$hsc_std)->with('unit',$unit)->with('university',$university);
    }
}
