<!DOCTYPE html>
<html>
<head>
    <title>Add-Unit</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>
</head>
<body style="font-family: serif">
@include('header')
<div class="container">
    <div align="center">
        <br/><br/>
        <div class="input-group">
            <label class="label label-default" style="font-size: 20px">{{ $university->name }}</label>
            {{--<input type="text" class="form-control" name="address" id="address" placeholder="Enter Valid Address: "/>--}}
        </div><br><br>
        <div style="border-style: ridge;padding: 10px">
        @foreach($ssc_std as $res)
            <p>Name of Student : {{ $res->name }}</p>
            <div class="row">
                <div class="col-md-4">
                    <p>Roll No : {{ $res->roll_no }}</p>
                </div>
                <div class="col-md-4">
                    <p>Registration No : {{ $res->reg_no }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Group : {{ $res->group }}</p>
                </div>
                <div class="col-md-4">
                    <p>Type of Student : {{ $res->std_type }}</p>
                </div>
            </div>
            <p>Name of Center : {{ $res->center }}</p>
            <p>Name of Institution : {{ $res->institution }}</p>
            <div class="row">
                <div class="col-md-4">
                    <p>Obtained Grade Point Average(GPA) : {{ $res->gpa }}</p>
                </div>
                <div class="col-md-4">
                    <p>Obtained Letter Grade : {{ $res->grade }}</p>
                </div>
                <div class="col-md-4">
                    <p>Passing Year : {{ $res->passing_year }}</p>
                </div>
            </div>
        @endforeach
        </div>
        <br>
        <div style="border-style: ridge;padding: 10px;">
            @foreach($hsc_std as $res)
                <p>Name of Student : {{ $res->name }}</p>
                <div class="row">
                    <div class="col-md-4">
                        <p>Roll No : {{ $res->roll_no }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>Registration No : {{ $res->reg_no }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>Group : {{ $res->group }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>Type of Student : {{ $res->std_type }}</p>
                    </div>
                </div>
                <p>Name of Center : {{ $res->center }}</p>
                <p>Name of Institution : {{ $res->institution }}</p>
                <div class="row">
                    <div class="col-md-4">
                        <p>Obtained Grade Point Average(GPA) : {{ $res->gpa }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>Obtained Letter Grade : {{ $res->grade }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>Passing Year : {{ $res->passing_year }}</p>
                    </div>
                </div>
                @php
                    $hsc_roll=$res->roll_no;
                @endphp
            @endforeach
        </div>
                <br><br>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" readonly class="form-control" name="first_name" id="first_name" value="Unit : {{ $unit->name }}" placeholder=""/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Father's Name : "/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Mother's Name : "/>
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <input type="text" class="form-control" readonly value="{{ $unit->subject }}" name="opinion" id="opinion" placeholder=""/>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code/Zip Code : "/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="fax" id="fax" placeholder="Telephone/Fax : "/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="city" id="city" placeholder="City/Town : "/>
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <input type="text" class="form-control" name="opinion" id="opinion" placeholder="Your Opinion (Optional): "/>
                </div>
        {{--<div style="border-style: ridge;padding: 10px;">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="text" style="background-color: #f94c94;color: #fff;font-size: 15px;font-weight: bold" readonly class="form-control" name="first_name" id="first_name" value="PAYMENT WITH BKASH" placeholder=""/>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="text" style="background-color: green;color: #fff;font-size: 15px;font-weight: bold" readonly class="form-control" name="last_name" id="last_name" value="PAYMENT WITH TELETALK"/>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="text" style="background-color: #bd00ca;color: #fff;font-size: 15px;font-weight: bold" readonly class="form-control" name="email" id="email" value="PAYMENT WITH ROCKET"/>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="number" class="form-control" name="postal_code" id="postal_code" placeholder="Phone Number : "/>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="number" class="form-control" name="fax" id="fax" placeholder="Phone Number : "/>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="number" class="form-control" name="city" id="city" placeholder="Phone Number : "/>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="number" class="form-control" name="postal_code" id="postal_code" placeholder="Bkash Pin Number : "/>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="number" class="form-control" name="fax" id="fax" placeholder="Teletalk Pin Number : "/>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="number" class="form-control" name="city" id="city" placeholder="Rocket Pin Number : "/>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<input type="text" readonly class="form-control btn btn-default" value="Admission Serial No : {{ random_int(11111111,11999999) }}"/>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<br><br>--}}
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img style="width: 100%;height: 90px;" src="{{ asset('images/bkash2.png') }}"/>
                </div>
                <div style="background-color: #e3106e;color: #fff;">
                    <p style="padding-top: 10px;">Merchant : {{ $university->name }}</p>
                    <p>Invoice No : LDNF87DVNDFV8DFVNDFV87YVDFIV</p>
                    <p style="margin-bottom: 15px;">Amount : </p>
                    <p>Your bkash account  number : </p>
                    <input style="display: block;width: 250px;margin-bottom: 10px" class="form-control" type="number" placeholder="e.g 01XXXXXXXXX">
                    <label style="margin-bottom: 10px;"><input type="checkbox"> I agree to the terms and condition</label>
                </div>
                <div style="background-color: #e3106e;color: #fff;padding-bottom: 20px;">
                    <input class="btn" type="button"  value="PROCEED" style="display:inline-block;background-color: #bf0055;width: 100px;color: #fff;">
                    <input class="btn" type="button" value="CLOSE" style="display: inline-block;background-color: #bf0055;width: 100px;color: #fff">
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img style="width: 100%;height: 90px;" src="{{ asset('images/teletalk.png') }}"/>
                </div>
                <div style="background-color: #71bd44;color: #fff;">
                    <p style="padding-top: 10px;">Merchant : {{ $university->name }}</p>
                    <p>Invoice No : LDNF87DVNDFV8DFVNDFV87YVDFIV</p>
                    <p style="margin-bottom: 15px;">Amount : </p>
                    <p>Your teletalk account  number : </p>
                    <input style="display: block;width: 250px;margin-bottom: 10px" class="form-control" type="number" placeholder="e.g 01XXXXXXXXX">
                    <label style="margin-bottom: 10px;"><input type="checkbox"> I agree to the terms and condition</label>
                </div>
                <div style="background-color: #71bd44;color: #fff;padding-bottom: 20px;">
                    <input class="btn" type="button"  value="PROCEED" style="display:inline-block;background-color: #225d00;width: 100px;color: #fff;">
                    <input class="btn" type="button" value="CLOSE" style="display: inline-block;background-color: #225d00;width: 100px;color: #fff">
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img style="width: 100%;height: 90px;padding-top: 10px;padding-bottom: 10px;" src="{{ asset('images/surecash.png') }}"/>
                </div>
                <div style="background-color: #f7cf00;color: #fff;">
                    <p style="padding-top: 10px;">Merchant : {{ $university->name }}</p>
                    <p>Invoice No : LDNF87DVNDFV8DFVNDFV87YVDFIV</p>
                    <p style="margin-bottom: 15px;">Amount : </p>
                    <p>Your surecash account  number : </p>
                    <input style="display: block;width: 250px;margin-bottom: 10px" class="form-control" type="number" placeholder="e.g 01XXXXXXXXX">
                    <label style="margin-bottom: 10px;"><input type="checkbox"> I agree to the terms and condition</label>
                </div>
                <div style="background-color: #f7cf00;color: #fff;padding-bottom: 20px;">
                    <input class="btn" type="button"  value="PROCEED" style="display:inline-block;background-color: #ad9104;width: 100px;color: #fff;">
                    <input class="btn" type="button" value="CLOSE" style="display: inline-block;background-color: #ad9104;width: 100px;color: #fff">
                </div>
            </div>
        </div>
        <br><br>
        <div class="form-group">
            <input type="text" class="form-control btn btn-primary" name="opinion" id="opinion" value="Click Here To Confirm Admission"/>
        </div>
    </div>
    <br><br><br><br>
</div>
<br/><br/>
</body>
</html>