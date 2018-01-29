<footer class="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h2 class="logo"><a href="#"> LOGO </a></h2>
            </div>
            <div class="col-sm-2">
                <h5>Get started</h5>
                <ul>
                    <li><a href="/">Home</a></li>
                    @guest
                        <li><a href="/register">Sign up</a></li>
                        <li><a href="/login">Login</a></li>
                    @endguest
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>About us</h5>
                <ul>
                    <li><a href="/about">Company Information</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#contact">Contact us</a></li>
                </ul>
            </div>
            {{--<div class="col-sm-2">--}}
            {{--<h5>Support</h5>--}}
            {{--<ul>--}}
            {{--<li><a href="#">FAQ</a></li>--}}
            {{--<li><a href="#">Help desk</a></li>--}}
            {{--<li><a href="#">Forums</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            <div class="col-sm-3 col-sm-offset-2">
                <div class="social-networks">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#contact">Contact us
                </button>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2018 Copyright Reserved </p>
    </div>
</footer>
@include('layouts.contact')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>