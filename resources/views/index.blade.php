<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>

<body>

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

        (function($){
            $(window).load(function(){
                $(".content").mCustomScrollbar();
            });
        })(jQuery);

        $("#scrollBar").mCustomScrollbar({
            axis:"x",
            theme:"inset-2",
            advanced:{autoExpandHorizontalScroll:true}
        });

        var btnLink = "#linkBtn<?php echo $nrOfPage?>";

        $(btnLink).toggleClass("btnDefault-active");
        $(btnLink).toggleClass("btn-default");

        $("#scrollBar").mCustomScrollbar("scrollTo",btnLink);
    });

</script>
    @include('header')
    @include('content')
    @include('footer')
</body>
</html>
