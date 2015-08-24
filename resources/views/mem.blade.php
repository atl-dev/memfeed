@include('head');
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
@include('header');
   <div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
    <article  class="mem">
        <a href="/view/mem/{{$mem->id}}">
            <img class="img-responsive mem-img" src="{{$mem->img_path}}" alt="TEXT"/>
        </a>
        <div class="row mem-content">
            <div class="col-md-6 vCenter" style="margin-bottom: 15px;">
                <div class="row">
                        <div class="vCenter" style="margin-right:25px;">
                            <button class="btn btn-primary" style="margin-right: 1px;"><span class="fa fa-thumbs-o-up"></span> {{$mem->plus}} </button>
                            <button class="btn btn-primary"><span class="fa fa-thumbs-o-down"></span> {{$mem->minus}}</button>
                        </div>
                        <div class="vCenter" style="margin-right: 0px;">
                            <div class="fb-share-button" data-href="/view/mem/{{$mem->id}}" data-layout="button_count"></div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 mem-addedBy vCenter" style="margin-bottom: 15px;">
                Added by: <b><a href="/user/profile/" style="margin-right: 10px;">
                </a></b>
                <i class="fa fa-commenting fa-1x"> <a href="/view/mem/{{$mem->id}}#comment" alt="Link to comment site"><b>Comment</b></a></i>
            </div>
    </article>
    </div>
                <div class="col-sm-2">
                </div>
            </div>
</div>
@include('footer')



