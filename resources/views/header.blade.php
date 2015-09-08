<!--
camelCase - ids in HTML  , variables in php ;
-->


<script>
    $(document).ready(function(){
        //Funtion fo change activ  element

    });
</script>

<nav class="navbar navbar-inverse navbar-fixed-top yellowMenu">
    <div class="container-fluid">
        <div class="navbar-header">
            <!-- Trzy poziome kreski, gdy ekran jest za mały-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="/">MEMFEED.PL</a>
        </div>

        <!--TODO-note Deleted id ~myNavbar~ -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active" id="home"><a href="/">Home</a></li>
                <li id="afterRoom"><a href="/anterroom">Anteroom</a></li>
                <li id="top"><a href="/top">Top</a></li>
            </ul>
            <!--Search area -->
            <ul class="nav navbar-nav navbar-right">
                <li style="margin: 8px;">
                    <div class="input-group" style="width: 200px">
                            <input type="text" class="form-control" name="search" placeholder="Search ...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                    </div>
                </li>
                @if(!Auth::check())
                    <!--@TODO use here your modal  -->
                    <li><a  href="/auth/login" data-target="#loginModal" style="cursor: pointer;"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                @else

                    <li><a href="/view/profile/{{Auth::user()->id}}" style="cursor: pointer;"><i class="fa fa-user"></i> Your acount</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
