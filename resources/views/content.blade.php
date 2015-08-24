<div class="container-fluid" style=" margin-top: 100px;">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                   @include('functions')
                    <div style="max-width: 750px;margin: 40px auto;">
                        <a href="{!! $mems->nextPageUrl()!!}" style="text-decoration:none">
                        <div class="btn btn-primary nextPageBtn">
                            <b>Next page <i class="fa fa-arrow-circle-right fa-fw fa-lg"></i></b>
                        </div>
                        </a>
                        <div id="scrollBar">
                            @for($i=1;$i<$mems->lastPage()+1;$i++)
                                <a id="linkBtn" href="{!! $mems->url($i)!!}" style="margin-right:5px;width:54px;text-align: center;" class="btn btn-default">{{$i}} </a>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
</div>