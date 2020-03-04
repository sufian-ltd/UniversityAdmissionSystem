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
    <a class="btn btn-primary" style="float: right;" href="{{ route('addUniversity') }}"><i class="glyphicon glyphicon-plus"></i> Add New University</a><br/><br/>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>SL No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Category</th>
            <th>Location</th>
            <th>Total Unit</th>
            <th>Avg Requirement</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($university as $res)
            @php $i++; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->type }}</td>
                <td>{{ $res->category}}</td>
                <td>{{ $res->location }}</td>
                <td>{{ $res->unit }}</td>
                <td>{{ $res->min_req }}</td>
                <td><a href="{{ route('editUniversity',$res->id) }}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Update</a></td>
                <td><a href="{{ route('deleteUniversity',$res->id) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
                <td><a href="{{ route('addUnit',$res->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> Add Unit</a></td>
                <td><a href="{{ route('viewUnit',$res->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-lamp"></i> View Unit</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>