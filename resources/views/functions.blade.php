
    @forech($mems as $mem)
    <article  class="mem">
        <a href="#">
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
                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
                        </div>
                </div>
            </div>
            <div class="col-md-6 mem-addedBy vCenter" style="margin-bottom: 15px;">
                Added by: <b><a href="/user/profile/{{$mem->author->id}}" style="margin-right: 10px;">{{$mem->author->username}}</a></b>
                <i class="fa fa-commenting fa-1x"> <a href="/view/mem/{{$mem->id}}#comment" alt="Link to comment site"><b>Comment</b></a></i>
            </div>
    </article>
@endforeach