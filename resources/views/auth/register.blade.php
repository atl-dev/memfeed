<!DOCTYPE html>
<html lang="en">
<head>
@include('assets')
</head>
<body>

@include('partials.navbar.default')

<<<<<<< HEAD
<div class="container-fluid"  id="footNav-container">
    <div class="row" style=" margin-top: 74px;text-align: center;">
        <div class="col-sm-3"></div>
        <div class='col-sm-6'>
            <div class="mem" style="padding-left: 10px;padding-right:10px;padding-bottom:10px;margin-top:10px;">
                <div style="background-color: #222327;">
                    <h3 style="margin-bottom:10px;margin-top:10px;padding-top:16px;padding-bottom:16px;"><i class="fa fa-user-plus"></i> Sign up</h3>
                </div>
                <form action="/auth/register" method="post">
                 {!! csrf_field() !!}
                    <div class="spaceLoginForm" style="padding-top:5px;">
                        <input type="text" name="login" class="form-control input-lg" placeholder="Login" value="{{ old('name') }}">
                    </div>
                    <div class="spaceLoginForm">
                        <input type="email" placeholder="E-mail" class='form-control input-lg' name="email" value="{{ old('email') }}">
                    </div>
                    <div class="spaceLoginForm">
                        <input type="password" placeholder="Password" class='form-control input-lg' name="password" id="password">
                    </div>
                     <div class="spaceLoginForm">
                        <input type="password" placeholder="Confirm password" class='form-control input-lg' name="password_confirmation" id="password">
                    </div>
                    <div class="spaceLoginForm" style="padding-top:5px;">
                        <button type="submit" class='btn btn-lg btn-primary nextPageBtn' ><b>Register <i class="fa fa-arrow-circle-right"></i></b></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    <div id="footer-push"></div>
=======

>>>>>>> master
</div>
@include('partials.page.footer')
</body>
</html>
