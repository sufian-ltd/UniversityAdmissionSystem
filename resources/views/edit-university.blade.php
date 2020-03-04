<!DOCTYPE html>
<html>
<head>
    <title>University</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('updateUniversity',$university->id) }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" value="{{ $university->name }}" required name="name" id="name1" placeholder="Enter University Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="type" class="form-control">
                    <option value="Public">Public</option>
                    <option value="Private">Private</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="category" class="form-control">
                    <option value="General">General</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Technology">Technology</option>
                    <option value="Medical">Medical</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="location" class="form-control">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" value="{{ $university->unit }}" name="unit" id="unit1" placeholder="Enter Number of Unit : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" value="{{ $university->min_req }}" name="min_req" id="min_req1" placeholder="Enter Average Requirement : "/>
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