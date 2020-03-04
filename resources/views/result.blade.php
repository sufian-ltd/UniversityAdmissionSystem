@php
    $ssc_roll=0;
    $hsc_roll=0;
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>Admission</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif;color: black">
@include('header')
<div class="container">
    <br/>
    <div align="center">
        <img src="{{ asset('images/d1.jpg') }}" width="150" height="150"><br/><br/>
        <form action="{{ route('result') }}" method="get" style="width: 500px">
            <div class="input-group">
                <label class="label" style="color: red;font-size: 13px;">Enter Your 6 digits SSC Roll Number</label>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input max="999999" required class="form-control" type="number" name="ssc_roll_no" id="ssc_roll_no">
            </div>
            <br/>
            <div class="input-group" style="width: 500px">
                @php
                if ($sscErrorMsg != "") {
                    echo '<div class="alert alert-danger">' . $sscErrorMsg . '</div>';
                }
                @endphp
            </div>
            <div class="input-group">
                <label class="label" style="color: red;font-size: 13px;">Enter Your 6 digits HSC Roll Number</label>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input max="999999" required class="form-control" type="number" name="hsc_roll_no" id="hsc_roll_no">
            </div>
            <br/>
            <div class="input-group" style="width: 500px">
                @php
                if ($hscErrorMsg != "") {
                    echo '<div class="alert alert-danger">' . $hscErrorMsg . '</div>';
                }
                @endphp
            </div>
            <div class="input-group">
                <button style="width: 500px" type="submit" name="search" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Search Result</button>
            </div>
            <br/>
        </form>
    </div>
    <br/>
    <button class="btn btn-danger form-control" style="font-family: serif;">Secondary School Certificate Result Sheet</button>
    <br/><br/>
    <div style="border-style: ridge;padding: 10px">
        @foreach($ssc_std as $res)
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
            @php
                $ssc_roll=$res->roll_no;
            @endphp
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
        @foreach($ssc_result as $res)
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
    <br/>
    <button class="btn btn-danger form-control" style="font-family: serif;">Higher Secondary Certificate Result Sheet</button>
    <br/><br/>
    <div style="border-style: ridge;padding: 10px;">
        @foreach($hsc_std as $res)
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
            @php
                $hsc_roll=$res->roll_no;
            @endphp
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
        @foreach($hsc_result as $res)
            @php $i++;@endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->subject_code }}</td>
                <td>{{ $res->subject_name }}</td>
                <td>{{ $res->subject_type }}</td>
                <td>{{ (float)$res->gpa }}</td>
                <td>{{ $res->grade }}</td>
            </tr>
        @endforeach()
    </table>

    <a href="{{ route('university',[$ssc_roll,$hsc_roll]) }}" class="btn btn-primary form-control"><i class="glyphicon glyphicon-search"></i> Search University For Admission</a>
    <br/><br/>
    <br/><br/>
</div>
@include('footer')
</body>
</html>