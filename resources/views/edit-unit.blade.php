<!DOCTYPE html>
<html>
<head>
    <title>Add-Unit</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>
</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('updateUnit',[$id,$uni_id]) }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" value="{{ $unit->name }}" required name="name" id="name1" placeholder="Enter Unit Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" value="{{ $unit->subject }}" required name="subject" id="subject1" placeholder="Enter All Subject Names : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" value="{{ $unit->ssc_req }}" name="ssc_req" id="ssc_req1" placeholder="Enter SSC Requirement : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" value="{{ $unit->hsc_req }}"  name="hsc_req" id="hsc_req1" placeholder="Enter HSC Requirement : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="total_req" value="{{ $unit->total_req }}"  id="total_req1" placeholder="Enter Total Requirement : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" value="{{ $unit->seat }}"  name="seat" id="seat1" placeholder="Enter Number of Seat : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="ssc_group" class="form-control">
                    <option value="0">SSC Applicable Group</option>
                    <option value="1">Science</option>
                    <option value="2">Commerce</option>
                    <option value="3">Arts</option>
                    <option value="12">Science & Commerce</option>
                    <option value="13">Science & Arts</option>
                    <option value="23">Commerce & Arts</option>
                    <option value="123">Science & Commerce & Arts</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="hsc_group" class="form-control">
                    <option value="0">HSC Applicable Group</option>
                    <option value="1">Science</option>
                    <option value="2">Commerce</option>
                    <option value="3">Arts</option>
                    <option value="12">Science & Commerce</option>
                    <option value="13">Science & Arts</option>
                    <option value="23">Commerce & Arts</option>
                    <option value="123">Science & Commerce & Arts</option>
                </select>
            </div>
            <br>
            <button type="submit" style="width: 500px" class="btn btn-primary">Save Changes</button><br/>
        </form>
    </div>
</div>
<br/><br/>
@include('footer')
</body>
</html>