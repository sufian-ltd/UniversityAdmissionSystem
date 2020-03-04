<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('header')
<div class="container" align="center">
    <br/>
    <form action="{{ route('login') }}" method="get" style="width: 450px;padding: 15px">
        <img src="images/m.png" width="300" height="250">
        <div class="input-group">
            <h3>Admin Login</h3>
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input required type="email" class="form-control" name="email" id="email1" placeholder="Email : "/>
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" required  class="form-control" name="password" id="password1"
                   placeholder="Password : "/>
        </div>
        <br/>
        <div class="input-group">
            <button name="login" style="width: 415px" type="submit" class="btn btn-primary glyphicon glyphicon-log-in"> Login</button>
        </div>
        <br/>
    </form>
</div>
<br/>
@include('footer')
</body>
</html>
