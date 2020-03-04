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
        <form action="{{ route('saveStudent') }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" maxlength="6" class="form-control" required name="roll_no" id="roll_no1" placeholder="Enter Roll No : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" maxlength="6" class="form-control" required name="reg_no" id="reg_no1" placeholder="Enter Reg No : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="group" class="form-control">
                    <option value="Science">Science</option>
                    <option value="Commerce">Commerce</option>
                    <option value="Arts">Arts</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required class="form-control" name="name" id="name1" placeholder="Enter Student Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required class="form-control" name="center" id="center1" placeholder="Enter Board : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required class="form-control" name="institution" id="institution1" placeholder="Enter Institution Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="std_type" class="form-control">
                    <option value="Regular">Regular</option>
                    <option value="Not Regular">Not Regular</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="passing_year" id="passing_year1" placeholder="Enter Passing Year : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="ssc_hsc" class="form-control">
                    <option value="ssc">SSC</option>
                    <option value="hsc">HSC</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required class="form-control" name="gpa" id="gpa1" placeholder="Enter GPA : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" required class="form-control" name="grade" id="grade1" placeholder="Enter Grade : "/>
            </div>
            <br/>
            <button type="submit" style="width: 500px" class="btn btn-primary">Save Student</button><br/>
        </form>
    </div>
</div>
<br/><br/>
@include('footer')
</body>
</html>