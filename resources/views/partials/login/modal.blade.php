<div id="loginModal" class="modal fade" role="dialog" style="color: #333;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i style="color:white;" class="fa fa-times"></i></button>
                <h4 class="modal-title">Log in form</h4>
            </div>
            <div class="modal-body">
                <!--                Miejsce użycia formy - admin.php-->

                <form action="auth/login" method="post">
                  <input type='hidden' name='_token' value='{{csrf_token()}}'>
                    <div class="form-group" >
                        <h5><label for="usr"><i class="fa fa-user"></i> E-mail:</label></h5>
                        <input type="email" class="form-control" name="email" id="usr">
                    </div>
                    <div class="form-group" >
                        <h5><label for="pwd"><i class="fa fa-lock"></i> Password:</label></h5>
                        <input type="password" class="form-control" name="password" id="pwd">
                    </div>
                    <input style="width: 100%" type="submit" name="submit" value="Login" class="btn btn-default">
                </form>
            </div>
            <div class="modal-footer">
                <a href="/auth/register">Need account?</a></br>
                <a href="remember_psw.php">Forgot password?</a>
            </div>
        </div>
    </div>
</div>
