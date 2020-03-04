<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <br><br>
    <form action="{{ route('saveSSCResultData') }}" method="get">
    <table class="table table-bordered table-striped">
        <tr>
            <th>SL</th>
            <th>Roll No</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Subject Type</th>
            <th>GPA</th>
            <th>Grade</th>
        </tr>
        @php $i=0; @endphp
        @foreach($result as $res)
        @php $i++; @endphp
        <tr>
            <td><input class="form-control" readonly type="number" name="" value="{{ $i }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code1" value="{{ $res->subject_code }}" maxlength="4"></td>
            <td><input class="form-control" readonly type="text" name="subject_name1" value="{{ $res->subject_name }}" maxlength="4"></td>
            <td>
                <select name="subject_type1" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa1" value="{{ $res->gpa }}" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade1" value="{{ $res->grade }}" maxlength="2"></td>
        </tr>
        @endforeach
    </table>
    <input type="submit" class="btn btn-primary" style="float: right" value="Click Here To Save Changes Result Data">
        <br><br><br><br>
    </form>
</div>
@include('footer')
</body>
</html>
