<!--
camelCase - ids in HTML  , variables in php ;
-->

<?php
/**
 * Created by PhpStorm.
 * User: puman_000
 * Date: 2015-08-04
 * Time: 14:16
 */

$localAdress = "http://patrykjanik.cba.pl/projects/memfeed/home.php";
$afterRoom = "http://patrykjanik.cba.pl/projects/memfeed/afterRoom.php";
$top = "http://patrykjanik.cba.pl/projects/memfeed/afterRoom.php";

$active = "home";
//home, afterRoom, top;

 ?>
<script>
    $(document).ready(function(){
        //Funtion fo change activ  element
        var active = <?php echo json_encode($active); ?> ;
        $("li.active").removeClass("active");
        $("#"+active).addClass("active");
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
            <a class="navbar-brand logo" href="<?php echo $localAdress; ?>">MEMFEED.PL</a>
        </div>

        <!--TODO-note Why there are ~myNavbar~ id ? -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active" id="home"><a href="<?php echo $localAdress; ?>">Home</a></li>
                <li id="afterRoom"><a href="<?php echo $afterRoom; ?>">Anteroom</a></li>
                <li id="top"><a href="<?php echo $top; ?>">Top</a></li>
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
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
