<nav class="navbar navbar-inverse navbar-fixed-top yellowMenu">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Trzy poziome kreski, gdy ekran jest za mały-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="/admin">Dashboard</a>
        </div>

        <!--TODO-note Deleted id ~myNavbar~ -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active" id="home"><a href="/admin/manage/mems">Mems</a></li>
                <li id="afterRoom"><a href="/admin/manage/users">Users</a></li>
                <li id="top"><a href="/admin/manage/comments">Comments</a></li>
            </ul>
            <!--Search area -->
            <ul class="nav navbar-nav navbar-right">
                
                @if(!Auth::check())
                    <li><a  href="/auth/login" data-target="#loginModal" style="cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                @else

                    <li><a href="/view/profile/{{Auth::user()->id}}" style="cursor: pointer;"><i class="fa fa-user"></i> Your acount</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
