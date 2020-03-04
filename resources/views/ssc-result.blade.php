<!DOCTYPE html>
<html>
<head>
    <title>SSC Result</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('header')

<div class="container">
    <br/><br/>
    <div align="center">
        <form action="{{ route('sscResult') }}" method="get" style="width: 500px">
            <div class="input-group">
                @php
                if ($errorMsg != "") {
                    echo '<div class="alert alert-danger">' . $errorMsg . '</div>';
                }
                @endphp
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input class="form-control" type="number" name="roll_no" id="roll_no" placeholder="Enter Valid SSC Roll No">
            </div>
<!--             <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input class="form-control" type="number" name="reg_no" id="reg_no" placeholder="Enter valid Registration No">
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select class="form-control" name="group">
                    <option value="nothing">Select Group</option>
                    <option value="science">Science</option>
                    <option value="commerce">Commerce</option>
                    <option value="arts">Arts</option>
                </select>
            </div> -->
            <br/>
            <div class="input-group">
                <button style="width: 500px" type="submit" name="search" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Search Result</button>
            </div>
            <br/>
        </form>
    </div>
    <br/>
    <button class="btn btn-danger form-control" style="font-family: serif;">Your Search Result Sheet</button>
    <hr/>
    <div style="border-style: ridge;padding: 10px">
        @foreach($std as $res)
            <p>Name of Student : {{ $res->name }}</p>
            <div class="row">
                <div class="col-md-4">
                    <p>Roll No : {{ $res->roll_no }}</p>
                </div>
                <div class="col-md-4">
                    <p>Registration No : {{ $res->reg_no }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Group : {{ $res->group }}</p>
                </div>
                <div class="col-md-4">
                    <p>Type of Student : {{ $res->std_type }}</p>
                </div>
            </div>
            <p>Name of Center : {{ $res->center }}</p>
            <p>Name of Institution : {{ $res->institution }}</p>
            <div class="row">
                <div class="col-md-4">
                    <p>Obtained Grade Point Average(GPA) : {{ $res->gpa }}</p>
                </div>
                <div class="col-md-4">
                    <p>Obtained Letter Grade : {{ $res->grade }}</p>
                </div>
                <div class="col-md-4">
                    <p>Passing Year : {{ $res->passing_year }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <br/>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>SL No</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Subject Type</th>
            <th>Grade Point(GP)</th>
            <th>Latter Grade</th>
        </tr>
        @php $i=0; @endphp
        @foreach($result as $res)
            @php $i++;@endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->subject_code }}</td>
                <td>{{ $res->subject_name }}</td>
                <td>{{ $res->subject_type }}</td>
                <td>{{ $res->gpa }}</td>
                <td>{{ $res->grade }}</td>
            </tr>
        @endforeach()
    </table>
    <br/><br/>
</div>
@include('footer')
</body>
</html>