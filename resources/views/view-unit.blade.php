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
<div class="container-fluid">
    <br/><br/>
    {{--<a class="btn btn-primary" style="float: right;" href="{{ route('addUniversity') }}"><i class="glyphicon glyphicon-plus"></i> Add New University</a><br/><br/>--}}
    <button class="btn btn-danger form-control" style="font-family: serif;">The List Of Units Available In This University</button>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Subjects</th>
            <th>SSC Requirement</th>
            <th>HSC Requirement</th>
            <th>Total Requirement</th>
            <th>Seat</th>
            <th>SSC Applicable Group</th>
            <th>HSC Applicable Group</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($unit as $res)
            @php $i++; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->subject }}</td>
                <td>{{ $res->ssc_req}}</td>
                <td>{{ $res->hsc_req }}</td>
                <td>{{ $res->total_req }}</td>
                <td>{{ $res->seat }}</td>
                @php
                    $sg;
                    if($res->ssc_group=='1')
                        $sg="Science";
                    else if($res->ssc_group=='2')
                        $sg="Commerce";
                    else if($res->ssc_group=='3')
                        $sg="Arts";
                    else if($res->ssc_group=='12')
                        $sg="Science $ Commerce";
                    else if($res->ssc_group=='23')
                        $sg="Commerce & Arts";
                    else if($res->ssc_group=='13')
                        $sg="Science $ Arts";
                    else if($res->ssc_group=='123')
                        $sg="Science $ Commerce & Arts";
                    $hg;
                    if($res->hsc_group=='1')
                        $hg="Science";
                    else if($res->hsc_group=='2')
                        $hg="Commerce";
                    else if($res->hsc_group=='3')
                        $hg="Arts";
                    else if($res->hsc_group=='12')
                        $hg="Science $ Commerce";
                    else if($res->hsc_group=='23')
                        $hg="Commerce & Arts";
                    else if($res->hsc_group=='13')
                        $hg="Science $ Arts";
                    else if($res->hsc_group=='123')
                        $hg="Science $ Commerce & Arts";
                @endphp
                <td>{{ $sg }}</td>
                <td>{{ $hg }}</td>
                <td><a href="{{ route('editUnit',[$res->id,$uni_id]) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Update</a></td>
                <td><a href="{{ route('deleteUnit',[$res->id,$uni_id]) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>