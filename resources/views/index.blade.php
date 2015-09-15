<!DOCTYPE html>
<html lang="en">
<head>
    @include('assets')
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

        var btnLink = "#linkBtn";

        $(btnLink).toggleClass("btnDefault-active");
        $(btnLink).toggleClass("btn-default");

        $("#scrollBar").mCustomScrollbar("scrollTo",btnLink);
    });

</script>
<div class="container-fluid" style=" margin-top: 100px;">
    @include('partials.navbar.default')

    @if(isset($mems))

      @foreach($mems as $mem)
        @include('partials.mem.default')
      @endforeach
      @include('partials.mem.pagination');
        
    @elseif(isset($mem))
      @include('partials.mem.single')
    @endif

    @if(!Auth::check())
      @include('partials.login.modal')
    @endif

    
    @include('partials.page.footer')
</div>
</body>
</html>
