<nav class="btn-lg" style="background: black;font-size: 18px;">
    <div class="container">
        <div class="navbar-collapse">
            <h4 align="center" style="color: #ffffff;font-size: 20px;font-weight: bold"><span class="glyphicon glyphicon-globe"></span> University Admission System</h4>
            <!--            <a style="color: #ffffff;font-size: 20px" class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-globe"></span> EASY Shopping</a>-->
        </div>
        <ul class="nav navbar-nav" >
            <li><a style="color: #009eff" href="{{route('index')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a style="color: #009eff" href=""><span class="glyphicon glyphicon-phone-alt"></span> About</a></li>
            <li><a style="color: #009eff" href="{{ route('result') }}"><span class="glyphicon glyphicon-globe"></span> Admission</a></li>
            <li><a style="color: #009eff" href="{{ route('sscResult') }}"><span class="glyphicon glyphicon-leaf"></span> SSC-Results</a></li>
            <li><a style="color: #009eff" href="{{ route('hscResult') }}"><span class="glyphicon glyphicon-leaf"></span> HSC-Results</a></li>
            {{--<li><a style="color: #009eff" href=""><span class="glyphicon glyphicon-search"></span> Search</a></li>--}}
        </ul>
        <ul class="nav navbar-nav navbar-right">
            {{--<li class="active"><a style="color: #009eff" href=""><span class="glyphicon glyphicon-user"></span> University-Information</a></li>--}}
            <li class="active"><a style="color: #009eff" href="{{ route('adminLogin') }}"><span class="glyphicon glyphicon-log-in"></span> Admin-Login</a></li>
        </ul>
    </div>
</nav>