<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
        <tr>
            <td><input class="form-control" readonly type="number" name="" value="1" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code1" value="1001" maxlength="4"></td>
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
            <td><input class="form-control" readonly type="number" readonly name="subject_code2" value="1002"></td>
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
            <td><input class="form-control" readonly type="number" name="" value="3" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}"></td>
            <td><input class="form-control" readonly type="number" name="subject_code3" value="1003"></td>
            <td><input class="form-control" readonly type="text" name="subject_name3" value="Mathematics"></td>
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
            <td><input class="form-control" readonly type="number" name="" value="4" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code4" value="1004" maxlength="4"></td>
            <td><input class="form-control" readonly type="text" name="subject_name4" value="General Science" maxlength="4"></td>
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
            <td><input class="form-control" readonly type="number" name="" value="5" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code5" value="1005"></td>
            <td><input class="form-control" readonly type="text" name="subject_name5" value="Religion,Islam"></td>
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
            <td><input class="form-control" readonly type="number" name="" value="6" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}"></td>
            <td><input class="form-control" readonly type="number" name="subject_code6" value="1006" ></td>
            <td><input class="form-control" readonly type="text" name="subject_name6" value="Accounting"></td>
            <td>
                <select name="subject_type6" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa6" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade6" value="" maxlength="2"></td>
        </tr>
        <tr>
            <td><input class="form-control" readonly type="number" name="" value="7" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code7" value="1007" maxlength="4"></td>
            <td><input class="form-control" readonly type="text" name="subject_name7" value="Management" maxlength="4"></td>
            <td>
                <select name="subject_type7" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa7" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade7" value="" maxlength="2"></td>
        </tr>
        <tr>
            <td><input class="form-control" readonly type="number" name="" value="8" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code8" value="1008" maxlength="4"></td>
            <td><input class="form-control" readonly type="text" name="subject_name8" value="Finance" maxlength="4"></td>
            <td>
                <select name="subject_type8" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa8" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade8" value="" maxlength="2"></td>
        </tr>
        <tr>
            <td><input class="form-control" readonly type="number" name="" value="9" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="roll_no" value="{{ $roll_no }}" maxlength="6"></td>
            <td><input class="form-control" readonly type="number" name="subject_code9" value="1009" maxlength="4"></td>
            {{--<td><input class="form-control" readonly type="text" name="subject_name9" value="Agriculture" maxlength="4"></td>--}}
            <td>
                <select name="subject_name9" class="form-control">
                    <option value="Agriculture">Agriculture</option>
                    <option value="Home Service">Home Service</option>
                </select>
            </td>
            <td>
                <select name="subject_type9" class="form-control" style="width: 120px;">
                    <option value="Compulsory">Compulsory</option>
                    <option value="Additional">Additional</option>
                </select>
            </td>
            <td><input class="form-control" type="text" name="gpa9" value="" maxlength="4"></td>
            <td><input class="form-control" type="text" name="grade9" value="" maxlength="2"></td>
        </tr>
    </table>
    <input type="submit" class="btn btn-primary" style="float: right" value="Click Here To Save SSC Result Data">
        <br><br><br><br>
    </form>
</div>
@include('footer')
</body>
</html>
