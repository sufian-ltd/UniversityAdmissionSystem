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
    <br/>
    <div align="center">
        <form action="{{ route('university',[$ssc_roll,$hsc_roll]) }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <select class="form-control" name="type">
                    {{--<option value="nothing">Select University</option>--}}
                    <option value="Public" selected>Public University</option>
                    {{--<option value="Private">Private University</option>--}}
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <select class="form-control" name="category">
                    <option value="nothing">Select Category</option>
                    <option value="Engineering">Engineering University</option>
                    <option value="Medical">Medical College</option>
                    <option value="Technology">Technology University</option>
                    <option value="General">Other University</option>
                </select>
            </div>
            <br/>
            {{--<div class="input-group">--}}
                {{--<span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>--}}
                {{--<select class="form-control" name="location">--}}
                    {{--<option value="nothing">Select Location</option>--}}
                    {{--<option value="dhaka">Dhaka</option>--}}
                    {{--<option value="chittagong">Chittagong</option>--}}
                    {{--<option value="sylhet">Sylhet</option>--}}
                    {{--<option value="rajshahi">Rajshahi</option>--}}
                    {{--<option value="khulna">Khulna</option>--}}
                    {{--<option value="barisal">Barisal</option>--}}
                    {{--<option value="rangpur">Rangpur</option>--}}
                    {{--<option value="mymensingh">Mymensingh</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--<br/>--}}
            <div class="input-group">
                <button style="width: 500px" type="submit" name="search" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Search University</button>
            </div>
            <br/>
        </form>
    </div>
    <br/>
    <button class="btn btn-danger form-control" style="font-family: serif;">University Search Results</button>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Type</th>
            <th>Category</th>
            <th>Total Unit</th>
            <th>Passing Year</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($university as $res)
            @php $i++;@endphp
            @php $canApply=0; @endphp
            <tr align="center">
                <td>{{ $i }}</td>
                <td>{{ $res-> name }}</td>
                <td>{{ $res-> type }}</td>
                <td>{{ $res-> category }}</td>
                <td>{{ $res-> unit }}</td>
{{--                <td>{{ $res-> location}}</td>--}}
                @if($res->id <=8)
                    <td>@php echo "SSC: ".(date("Y")-2)." - ".(date("Y")-3)." & HSC: ".date("Y")." - ".(date("Y")-1)  @endphp</td>
                @else
                    <td>@php echo "SSC: ".(date("Y")-2)." & HSC: ".date("Y")  @endphp</td>
                @endif
                @php
                    $isPassingYearMatched=0;
                    if($res->id <=8){
                        if(($ssc_passing_year==(date("Y")-2) || $ssc_passing_year==(date("Y")-3)) &&
                         ($hsc_passing_year==(date("Y")) || $hsc_passing_year==(date("Y")-1))){
                            $isPassingYearMatched=1;
                         }
                    }
                    else{
                        if($ssc_passing_year==(date("Y")-2) && $hsc_passing_year==(date("Y"))){
                            $isPassingYearMatched=1;
                        }
                    }
                @endphp
                @php
                    if(($ssc_group=='Science' && ($res->ssc_group =='1' || $res->ssc_group =='12'
                        || $res->ssc_group =='123' || $res->ssc_group =='13')) && ($hsc_group=='Science' && ($res->hsc_group =='1' ||
                        $res->hsc_group =='12' || $res->hsc_group =='123' || $res->hsc_group =='13')))
                        $canApply=1;
                    else if(($ssc_group=='Commerce' && ($res->ssc_group =='2' || $res->ssc_group =='12'
                        || $res->ssc_group =='123' || $res->ssc_group =='23')) && ($hsc_group=='Commerce' && ($res->hsc_group =='2' ||
                        $res->hsc_group =='12' || $res->hsc_group =='123' || $res->hsc_group =='23')))
                        $canApply=1;
                    else if(($ssc_group=='Arts' && ($res->ssc_group !='3' || $res->ssc_group =='13'
                        || $res->ssc_group =='123' || $res->ssc_group =='23')) && ($hsc_group=='Arts' && ($res->hsc_group =='3' ||
                        $res->hsc_group =='13' || $res->hsc_group =='123' || $res->hsc_group =='23')))
                        $canApply=1;
                @endphp

                <td>
                    @if($isPassingYearMatched==1)
                        <p class="text-success">Passing Year Matched</p>
                    @else
                        <p class="text-danger">Passing Year Limit Crossed</p>
                    @endif
                    @if($canApply==0)
                        <p class="text-danger">Students from Only Science Background can Apply</p>
                    @endif
                </td>
                @if($isPassingYearMatched==1 && $canApply==1)
                    <td><a href="{{ route('unit',[$ssc_roll,$hsc_roll,$res->id]) }}" class="btn btn-primary">Details</a></td>
                @else
                    <td><a class="btn btn-primary" style="opacity: .5;">Details</a></td>
                @endif
                {{--@if($res['min_req']<=($ssc_gpa+$hsc_gpa) && $canApply=='Applicable')--}}
                    {{--<td>--}}
                        {{--<p class="text-success">Applicable</p>--}}
                    {{--</td>--}}
                {{--@else--}}
                    {{--<td>--}}
                        {{--<p class="text-danger">Not Applicable</p>--}}
                    {{--</td>--}}
                {{--@endif--}}

                {{--<td><a href="" class="btn btn-primary">Details</a></td>--}}
            </tr>
        @endforeach()
    </table>
    <br/><br/>
</div>
@include('footer')
</body>
</html>