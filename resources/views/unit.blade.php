<!DOCTYPE html>
<html>
<head>
    <title>Search University</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/shared-style.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>
</head>
<body style="font-family: serif;color: black">
@include('header')
<div class="container-fluid">
    <br/><br/>
    <button class="btn btn-danger form-control" style="font-family: serif;">The List Of Units Available In This University</button>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Subject</th>
            <th>SSC Requirement</th>
            <th>HSC Requirement</th>
            <th>Total Seat</th>
            <th>Applicable</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($unit as $res)
            @php $i++; @endphp
            @php $canApply=0; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->subject }}</td>
                <td>{{ $res->ssc_req }}</td>
                <td>{{ $res->hsc_req }}</td>
                <td>{{ $res->seat }}</td>
                @php
                    if($res->uni_id == 18){ //BUET
                        if($ssc_physics != 5.00 || $ssc_chemistry != 5.00 || $ssc_math != 5.00 ||
                            $hsc_physics != 5.00 || $hsc_chemistry != 5.00 || $hsc_math != 5.00){
                            $canApply=0;
                        }
                    }
                    else if($res->uni_id == 19){ //CUET
                        if($ssc_physics < 4.00 || $ssc_chemistry < 4.00 || $ssc_math < 4.00 ||
                            $hsc_physics < 4.00 || $hsc_chemistry < 4.00 || $hsc_math < 4.00
                            || $ssc_english < 3.50 || $hsc_english < 3.50){
                            $canApply=0;
                        }
                    }
                    else if($res->uni_id == 23){ //KUET
                        if(($hsc_physics+$hsc_chemistry+$hsc_math+$hsc_english)<18.0){
                            $canApply=0;
                        }
                    }
                    else if($res->uni_id == 22){ //RUET
                        if(($hsc_physics+$hsc_chemistry+$hsc_math+$hsc_english)<18.5 ||
                        $hsc_physics < 4.00 || $hsc_chemistry < 4.00 || $hsc_math < 4.00
                         || $hsc_english<3.5){
                            $canApply=0;
                        }
                    }
                    else if($res->uni_id == 8){ //Medical
                        if($ssc_biology < 3.5 || $hsc_biology < 3.5){
                            $canApply=0;
                        }
                    }

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
                @if(($res->ssc_req<=$ssc_gpa) && ($res->hsc_req<=$hsc_gpa) && $canApply==1)
                    <td><p class="text-success">Applicable</p></td>
                    <td><a href="{{ route('applicationForm',[$ssc_roll,$hsc_roll,$res->id,$res->uni_id]) }}" class="btn btn-primary">Apply</a></td>
                @else
                    <td align="center">
                        <div class="tooltip1" style="width: 90px"><p class="text-danger">Not Applicable(Move Cursor Here)</p>
                            <span class="tooltiptext1">SSC Requirment : {{ $res->ssc_req }} HSC Requirment :  {{ $res->hsc_req }} Total Requirment :  {{ $res->total_req }}</span>
                        </div>
                    </td>
                    <td><a href="" class="btn btn-primary" style="opacity: .5;">Apply Failed</a></td>
                @endif
            </tr>
        @endforeach
    </table>
</div>
<br/><br/>
@include('footer')
</body>
</html>