
<?php
require("functions.php") ;
$iloscMemow = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("head.blade.php")
</head>

<div id="fb-root"></div>
<script>
    // FB BUTTON:
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $(document).ready(function(){

    });


</script>

<body>
    @include("header")
    @include("content") 
    @include("footer")

<!DOCTYPE html>
<html>
<head>
    @include('head');
</head>
<body>

    @include('header')
    {{--@include('content')--}}
    {{--@include('footer')--}}


</body>
</html>
