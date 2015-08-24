<div id="loginModal" class="modal fade" role="dialog" style="color: #333;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Log in form</h4>
            </div>
            <div class="modal-body">
                <!--                Miejsce użycia formy - admin.php-->
                <form action="your_acc.php" method="post">
                    <div class="form-group" >
                        <h5><label for="usr">Name:</label></h5>
                        <input type="text" class="form-control" name="usr" id="usr">
                    </div>
                    <div class="form-group" >
                        <h5><label for="pwd">Password:</label></h5>
                        <input type="password" class="form-control" name="pwd" id="pwd">
                    </div>
                    <input style="width: 100%" type="submit" name="submit" value="Login" class="btn btn-default">
                </form>
            </div>
        </div>
    </div>
</div>