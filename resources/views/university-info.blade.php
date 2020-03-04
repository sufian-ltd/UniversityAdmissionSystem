<!DOCTYPE html>
<html>
<head>
    <title>Search University</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif;color: black">
@include('header')
<div class="container">
    <br/><br/>
    <div align="center" >
        <form action="{{ route('universityInfo') }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select class="form-control" name="type">
                    <option value="nothing">Select University</option>
                    <option value="Public">Public University</option>
                    <option value="Private">Private University</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select class="form-control" name="category">
                    <option value="nothing">Select University</option>
                    <option value="Engineering">Engineering University</option>
                    <option value="Medical">Medical College</option>
                    <option value="Technology">Technology University</option>
                    <option value="General">Other University</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select class="form-control" name="location">
                    <option value="nothing">Select Location</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="sylhet">Sylhet</option>
                    <option value="rajshahi">Rajshahi</option>
                    <option value="khulna">Khulna</option>
                    <option value="barisal">Barisal</option>
                    <option value="rangpur">Rangpur</option>
                    <option value="mymensingh">Mymensingh</option>
                </select>
            </div>
            <br/>
            <div class="input-group">
                <button style="width: 500px" type="submit" name="search" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Search University</button>
            </div>
            <br/>
        </form>
    </div>
    <br/><br/>
    <div class="row">
        @foreach($university as $res)
        <div class="col-md-3">
            <div class="thumbnail" style="width: 270px;height: 530px">
{{--                @php echo '<img width="242" height="250" src="data:image/jpg;base64,' . base64_encode($pr['image']) . '">' @endphp--}}
                <img style="padding: 5px" width="242" height="240"  src="{{ asset('images/d1.jpg') }}">
                <div align="center" class="caption">
                    <h4 style="font-weight: bold">{{ $res->name }}</h4>
                    <br/>
                    <p><i class="glyphicon glyphicon-check"></i>  Category : {{ $res->category }}</p>
                    <p><i class="glyphicon glyphicon-user"></i>  University Type : {{ $res->type }}</p>
                    <p><i class="glyphicon glyphicon-gift"></i>  Total Unit : {{ $res->unit }}</p>
                    <a href="{{ route('unitInfo',$res->id) }}" type="submit" class='btn btn-primary form-control'><i class="glyphicon glyphicon-log-in"></i> Check Details</a>
                    <p></p>
                    <a type="submit" name="addToCart" class='btn btn-danger form-control'><i class="glyphicon glyphicon-globe"></i> Go To Website</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('footer')
</body>
</html>