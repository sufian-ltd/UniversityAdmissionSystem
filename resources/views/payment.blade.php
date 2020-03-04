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
<br/><br/>
<div class="container">
    <div align="center">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img src="{{ asset('images/bkash2.png') }}"/>
                </div>
                <div>
                    <label>Merchant : </label>
                    <label>Invoice No : LDNF87DVNDFV8DFVNDFV87YVDFIV</label>
                    <label>Amount : </label>
                    <label>Your bkash account  number : </label>
                    <input type="number" placeholder="e.g 01XXXXXXXXX">
                    <input type="checkbox"> I agree to the terms and condition
                </div>
                <div>
                    <input type="button" value="PROCEED" style="display:inline-block">
                    <input type="button" value="CLOSE" style="display: inline-block">
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>
<br/><br/>
</body>
</html>