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
    <form action="{{ route('saveHSCResultData') }}" method="get">
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
        <tr>
            <td><input class="form-control" readonly type="number" name="" value="1" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code1" value="2001" maxlength="4"></td>
            <td><input class="form-control" readonly type="text" name="subject_name1" value="Bengali" maxlength="4"></td>
            <td>
                <select name="subject_type1" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa1" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade1" value="" maxlength="2"></td>
        </tr>
        <tr>
            <td><input class="form-control" readonly type="number" readonly name="" value="2" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" readonly name="roll_no" value="{{ $roll_no }}"></td>
            <td><input class="form-control" readonly type="number" readonly name="subject_code2" value="2002"></td>
            <td><input class="form-control" readonly type="text" readonly name="subject_name2" value="English"></td>
            <td>
                <select name="subject_type2" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa2" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade3" value="" maxlength="2"></td>
        </tr>
        <tr>
            <input type="hidden" name="roll_no">
            <input type="hidden" name="subject_code3">
            <input type="hidden" name="subject_name3">
            <td><input class="form-control" readonly type="number" name="" value="3" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}"></td>
            <td><input class="form-control" readonly type="number" name="subject_code3" value="2003"></td>
            <td><input class="form-control" readonly type="text" name="subject_name3" value="Economics"></td>
            <td>
                <select name="subject_type3" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa3" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade3" value="" maxlength="2"></td>
        </tr>
        <tr>
            <input type="hidden" name="roll_no">
            <input type="hidden" name="subject_code4">
            <input type="hidden" name="subject_name4">
            <td><input class="form-control" readonly type="number" name="" value="4" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code4" value="2004" maxlength="4"></td>
            <td><input class="form-control" readonly type="text" name="subject_name4" value="History" maxlength="4"></td>
            <td>
                <select name="subject_type4" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa4" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade4" value="" maxlength="2"></td>
        </tr>
        <tr>
            <input type="hidden" name="roll_no">
            <input type="hidden" name="subject_code5">
            <input type="hidden" name="subject_name5">
            <td><input class="form-control" readonly type="number" name="" value="5" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code5" value="2005"></td>
            <td><input class="form-control" readonly type="text" name="subject_name5" value="Sociology"></td>
            <td>
                <select name="subject_type5" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa5" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade5" value="" maxlength="2"></td>
        </tr>
        <tr>
            <input type="hidden" name="roll_no">
            <input type="hidden" name="subject_code6">
            <input type="hidden" name="subject_name6">
            <td><input class="form-control" readonly type="number" name="" value="6" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}"></td>
            <td><input class="form-control" readonly type="number" name="subject_code6" value="2006" ></td>
            <td><input class="form-control" readonly type="text" name="subject_name6" value="Social Work"></td>
            <td>
                <select name="subject_type6" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa6" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade6" value="" maxlength="2"></td>
        </tr>
    </table>
    <input type="submit" class="btn btn-primary" style="float: right" value="Click Here To Save HSC Result Data">
        <br><br><br><br>
    </form>
</div>
@include('footer')
</body>
</html>
