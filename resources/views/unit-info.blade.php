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
    <button class="btn btn-danger form-control" style="font-family: serif;">The List Of Units Available In This University</button>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Subject</th>
            <th>SSC Requirement</th>
            <th>HSC Requirement</th>
            <th>Total Requirement</th>
            <th>Total Seat</th>
        </tr>
        @php $i=0; @endphp
        @foreach($unit as $res)
            @php $i++;@endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->subject }}</td>
                <td>{{ $res->ssc_req }}</td>
                <td>{{ $res->hsc_req }}</td>
                <td>{{ ($res->ssc_req + $res->hsc_req) }}</td>
                <td>{{ $res->seat }}</td>
            </tr>
        @endforeach
    </table>
</div>
<br/><br/>
@include('footer')
</body>
</html>