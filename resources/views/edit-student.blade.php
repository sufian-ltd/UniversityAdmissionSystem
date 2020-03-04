<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('updateStudent',$student->roll_no) }}" method="get" style="width: 500px;border: ridge;padding: 30px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" maxlength="6" value="{{ $student->roll_no }}" class="form-control" required name="roll_no" id="roll_no1" placeholder="Enter Roll No : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" maxlength="6" value="{{ $student->reg_no }}" class="form-control" required name="reg_no" id="reg_no1" placeholder="Enter Reg No : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" maxlength="6" value="{{ $student->group }}" class="form-control" required name="group" id="group1" placeholder="Enter Group No : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required  value="{{ $student->name }}"class="form-control" name="name" id="name1" placeholder="Enter Student Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->center }}" class="form-control" name="center" id="center1" placeholder="Enter Board : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->institution }}" class="form-control" name="institution" id="institution1" placeholder="Enter Institution Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->std_type }}" class="form-control" name="std_type" id="std_type1" placeholder="Enter Type(Regular/Not Regular) : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->passing_year }}" class="form-control" name="passing_year" id="passing_year1" placeholder="Enter Passing Year : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->ssc_hsc }}" class="form-control" name="ssc_hsc" id="ssc_hsc1" placeholder="Enter Certificate(ssc/hsc) : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->gpa }}" class="form-control" name="gpa" id="gpa1" placeholder="Enter GPA : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required value="{{ $student->grade }}" class="form-control" name="grade" id="grade1" placeholder="Enter Grade : "/>
            </div>
            <br/>
            <button type="submit" style="width: 435px" class="btn btn-primary">Save Changes</button><br/>
        </form>
        <br/><br/>
    </div>
</div>
<br/>
@include('footer')
</body>
</html>