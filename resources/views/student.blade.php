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
<div class="container-fluid">
    <br/><br/>
    <a class="btn btn-primary" style="float: right;" href="{{ route('addStudent') }}"><i class="glyphicon glyphicon-user"></i> Add New Student</a><br/><br/>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>SL No</th>
            <th>Roll No</th>
            <th>Reg No</th>
            <th>Group</th>
            <th>Name</th>
            <th>Center</th>
            <th>Institution</th>
            <th>Student Type</th>
            <th>Passing Year</th>
            <th>Certificate</th>
            <th>GPA</th>
            <th>Grade</th>
            {{--<th>Action</th>--}}
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($student as $res)
            @php $i++; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->roll_no }}</td>
                <td>{{ $res->reg_no }}</td>
                <td>{{ $res->group }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->center }}</td>
                <td>{{ $res->institution }}</td>
                <td>{{ $res->std_type }}</td>
                <td>{{ $res->passing_year }}</td>
                <td>{{ $res->ssc_hsc }}</td>
                <td>{{ $res->gpa}}</td>
                <td>{{ $res->grade}}</td>
{{--                <td><a href="{{ route('editStudent',$res->roll_no) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Update</a></td>--}}
                <td><a href="{{ route('deleteStudent',$res->roll_no) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                <td><a href="{{ route('addStudentResult',$res->roll_no) }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Result</a></td>
                <td><a href="{{ route('viewStudentResult',$res->roll_no) }}" class="btn btn-warning"><i class="glyphicon glyphicon-lamp"></i> View Result</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>